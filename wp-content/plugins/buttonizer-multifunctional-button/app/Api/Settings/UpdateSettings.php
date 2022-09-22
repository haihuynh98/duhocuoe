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

namespace Buttonizer\Api\Settings;

use Buttonizer\Utils\PermissionCheck;
use Buttonizer\Utils\Settings;

/**
 * Settings API
 * Updates settings
 *
 * @endpoint /wp-json/buttonizer/settings
 * @methods POST
 */
class UpdateSettings
{
    /**
     * Register route
     */
    public function registerRoute()
    {
        register_rest_route('buttonizer', '/settings', [
            [
                'methods'  => ['POST'],
                'args' => [
                    'data' => [
                        'required' => true,
                        'type' => "object"
                    ],
                    'nonce' => [
                        'validate_callback' => function ($value) {
                            return wp_verify_nonce($value, 'wp_rest');
                        },
                        'required' => true
                    ],
                ],
                'callback' => [$this, 'updateSettings'],
                'permission_callback' => function () {
                    return PermissionCheck::hasPermission();
                }
            ]
        ]);
    }

    /**
     * Update settings
     */
    public function updateSettings($request)
    {
        $data = $request->get_param('data');

        // Change admin bar button visibility
        if (isset($data['admin_top_bar_show_button'])) {
            Settings::setSetting("admin_top_bar_show_button", $data['admin_top_bar_show_button'] === true);
        }

        // Set can send errors
        if (isset($data['can_send_errors'])) {
            Settings::setSetting("can_send_errors", $data['can_send_errors'] === true);
        }

        // Additional permissions
        if (isset($data['additional_permissions']) && is_array($data['additional_permissions'])) {
            Settings::setSetting("additional_permissions", $data['additional_permissions']);
        }

        // Delete Google Analytics from settings
        if (isset($data['google_analytics']) && $data['google_analytics'] === "unset") {
            Settings::deleteSetting("google_analytics");
        }

        // Remind for a review
        if (isset($data['remindForReview']) && $data['remindForReview'] === true) {
            Settings::setSetting("review_reminding_since", new \DateTime());
        }

        // Mark as reviewed
        if (isset($data['markAsReviewed']) && $data['markAsReviewed'] === true) {
            Settings::setSetting("review_marked_as_done", true);

            // Remove setting if existed
            Settings::deleteSetting("remind_for_review");
        }

        // Save synced info
        Settings::saveUpdatedSettings();

        return [];
    }
}
