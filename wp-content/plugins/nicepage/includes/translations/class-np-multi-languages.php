<?php
defined('ABSPATH') or die;

class NpMultiLanguages
{
    /**
     * Pre init
     */
    public static function pre_init()
    {
        if (!is_admin()) {
            add_action('wp_head', array(__CLASS__, 'set_language_cookie'));
            add_action('template_redirect', array(__CLASS__, 'language_redirect'));
        }
    }
    /**
     * Get supported languages
     *
     * @return array $supported_langs
     */
    public static function get_supported_langs()
    {
        $supported_langs = array('en');
        if (get_option('np_supported_langs')) {
            $supported_langs = json_decode(get_option('np_supported_langs'));
        }
        return $supported_langs;
    }

    /**
     * Get default np language
     *
     * @return string $lang
     */
    public static function get_np_default_lang()
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if (get_option('np_default_lang')) {
            $lang = get_option('np_default_lang');
        }
        return $lang;
    }

    /**
     * Set cookie language
     */
    public static function set_language_cookie()
    {
        if (!isset($_COOKIE['np_lang']) && isset($_GET['lang']) || isset($_COOKIE['np_lang']) && isset($_GET['lang']) && $_COOKIE['np_lang'] !== $_GET['lang']) {
            if (!in_array($_GET['lang'], self::get_supported_langs())) {
                $_GET['lang'] = self::get_np_default_lang();
            }
            setcookie('np_lang', $_GET['lang'], time() + 3 * YEAR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN);
        }
    }

    /**
     * Redirect by cookie language
     */
    public static function language_redirect()
    {
        if (isset($_COOKIE['np_lang']) and !isset($_GET['lang'])) {
            $location = self::getLanguageLink($_COOKIE['np_lang']);
            wp_redirect($location);
        }
    }

    /**
     * Get language link for switcher/redirect
     *
     * @param string $language
     *
     * @return string $url
     */
    public static function getLanguageLink($language = 'en')
    {
        global $wp;
        global $post;
        $wp->query_vars['lang'] = $language;
        if (is_front_page() && !is_home()) {
            // if home page is np page
            $pagename = isset($post->post_name) ? $post->post_name : 'home';
            $wp->query_vars['pagename'] = $pagename;
        } else {
            unset($wp->query_vars['pagename']);
            unset($wp->query_vars['page']);
        }
        $wp->query_vars = array_unique($wp->query_vars);
        $url = add_query_arg($wp->query_vars, home_url($wp->request));
        return $url;
    }
}

if (count(NpMultiLanguages::get_supported_langs()) > 1) {
    NpMultiLanguages::pre_init();
}


