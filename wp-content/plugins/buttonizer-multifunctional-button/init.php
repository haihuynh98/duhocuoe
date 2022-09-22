<?php
/*
 * SOFTWARE LICENSE INFORMATION
 *
 * Copyright (c) 2017 Buttonizer, all rights reserved.
 *
 * This file is part of Buttonizer
 *
 * For detailed information regarding to the licensing of
 * this software, please review the license.txt or visit:
 * https://buttonizer.pro/license/
 */

use Buttonizer\Admin\Admin;
use Buttonizer\Utils\Settings;
use Buttonizer\Api\Api;
use Buttonizer\Utils\PageLanguage;
use Buttonizer\Utils\PermissionCheck;

/**
 * Get current languages
 */
function getCurrentLanguage()
{
    // Polylang
    if (function_exists("pll_current_language")) {
        return pll_current_language("slug");
    }

    // Weglot
    if (function_exists("weglot_get_current_language")) {
        return weglot_get_current_language();
    }

    // WMPL
    $currentLanguage = apply_filters('wpml_current_language', NULL);

    // Try to fall back on current language
    if (!$currentLanguage) return substr(get_bloginfo('language'), 0, 2);

    return $currentLanguage;
}

/**
 * Custom language
 *
 * Automatically redirects to the page in current language
 */
function buttonizer_redirect_to_page()
{
    // Validate params
    if (!isset($_GET['page_id']) || !is_numeric($_GET['page_id']) || !isset($_GET['is_buttonizer_redirect'])) {
        return;
    }

    $id = $_GET['page_id'];
    $page = null;

    // Polylang
    if (function_exists("pll_get_post")) {
        $page = pll_get_post($id);
    }

    // Check WPML translated page
    if (!$page && $wpmlObject = apply_filters('wpml_object_id', $id)) {
        $page = $wpmlObject;
    }

    // Redirect if post was found
    if ($redirectUrl = get_the_permalink($page ?? $id)) {
        wp_redirect($redirectUrl);
        exit;
    }
}

// Check Buttonizer Legacy enabled
if (
    // Check if legacy was forced
    Settings::getSetting("force_legacy", false) === true ||

    // Check for older installations which did not yet decide
    (Settings::getSetting("finished_setup", false) === false && get_option("buttonizer_buttons", false) !== false)
) {
    // Init legacy
    require_once BUTTONIZER_DIR . "/legacy.php";
} else {
    /*
    * Buttonizer Admin Dashboard
    */
    if (is_admin()) {
        // Load Admin page
        new Admin();
    }

    /**
     * Redirect to page in correct language
     */
    add_action('template_redirect', 'buttonizer_redirect_to_page', 0);

    /**
     * Add Buttonizer scripts
     */
    add_action('wp_enqueue_scripts', function () {
        // Add Google Analytics (old setting from Buttonizer 2.x)
        if (Settings::isset("google_analytics")) {
            wp_register_script('google_analytics', 'https://www.googletagmanager.com/gtag/js?id=' . Settings::getSetting("google_analytics"), array(), false, true);

            wp_enqueue_script('google_analytics');

            wp_add_inline_script('google_analytics', "
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', '" . Settings::getSetting("google_analytics") . "');");
        }

        // Add integration script
        if (Settings::getSetting("site_id")) {
            wp_register_script('buttonizer_integration_script', 'https://cdn.buttonizer.io/embed.js', [], BUTTONIZER_VERSION, true);

            // Get current page language
            $pageData = [
                "language" => getCurrentLanguage()
            ];

            // Add Buttonize page data
            if (Settings::getSetting("include_page_data", false)) {
                // Get page categories
                $pageCategories = array_map(function ($category) {
                    return $category->cat_ID;
                }, get_the_category());

                // Collect page data
                $pageData = array_merge([
                    "page_id" => get_the_ID(),
                    "categories" => $pageCategories,
                    "is_frontpage" => is_front_page(),
                    "is_404" => is_404(),
                    "user_roles" => PermissionCheck::getUserRoles()
                ], $pageData);
            }

            // Define page data
            $buttonizerData = "if(!window._buttonizer) { window._buttonizer = {}; };var _buttonizer_page_data = " . json_encode($pageData) . ";window._buttonizer.data = { ..._buttonizer_page_data, ...window._buttonizer.data };";

            wp_register_script('buttonizer_data', "");
            wp_add_inline_script('buttonizer_data', $buttonizerData);
            wp_enqueue_script('buttonizer_data');

            // Add Buttonizer integration script
            wp_add_inline_script('buttonizer_integration_script', "
            // Script is not yet finished loading in
            if(!window.Buttonizer) {
                window.addEventListener('buttonizer_script_loaded', () => window.Buttonizer.init('" . Settings::getSetting("site_id") . "'));
            } else {
                window.Buttonizer.init('" . Settings::getSetting("site_id") . "')
            }");
            wp_enqueue_script('buttonizer_integration_script');
        }
    });

    // Add admin menu
    add_action('admin_bar_menu', function ($bar) {
        Admin::wordpressAdminBar($bar);
    }, 100);

    /**
     * Initialize Buttonizer API endpoints
     */
    add_action('rest_api_init', function () {
        new Api();
    });
}
