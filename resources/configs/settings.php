<?php

/**
 * Add settings.
 *
 * @category PHP
 * @package  AthenaTheme
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @license  https://github.com/GetOlympus/Athena/blob/master/LICENSE MIT
 * @link     https://github.com/GetOlympus/Athena
 * @since    0.0.1
 */

return [
    /**
     * @var     string  $key    The setting uniq key.
     * @param   array   $args   Admin menu to remove.
     *
     * @see     https://codex.wordpress.org/Function_Reference/remove_menu
     */
    'admin-bar' => [
        'wp-logo',
        'about',
        'comments',
        'new-content',
        'wporg',
        'documentation',
        'support-forums',
        'feedback',
        'view-site',
    ],

    /**
     * @var     string  $key    The setting uniq key.
     * @param   string  $html   HTML snippet to display.
     *
     * @see     https://developer.wordpress.org/reference/hooks/admin_footer_text/
     */
    'admin-footer' => 'Build with ♥ by <a href="https://github.com/crewstyle" target="_blank">Achraf Chouk</a>, with <a href="http://www.wordpress.org/" title="Wordpress">WordPress</a> and for <b>WordPress developers</b>.',

    /**
     * @var     string  $key    The setting uniq key.
     * @param   array   $args   Admin menu in order.
     *
     * @see     https://codex.wordpress.org/Plugin_API/Filter_Reference/menu_order
     */
    'admin-menu-order' => [
        'index.php',                // Dashboard

        'separator1',

        'edit.php',                 // Posts
        'edit.php?post_type=page',  // Pages
        'upload.php',               // Medias

        'separator2',

        'edit-comments.php',        // Comments
        'users.php',                // Users

        'separator-last',

        'themes.php',               // Appearance
        'plugins.php',              // Plugins
        'tools.php',                // Tools
        'options-general.php',      // Settings
    ],

    /**
     * @var     string  $key    The setting uniq key.
     * @param   array   $args   Admin widgets to remove.
     *
     * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_dashboard_setup
     */
    'admin-meta-boxes' => [
        // Widget ID, Page, Column
        // ['dashboard_incoming_links', 'dashboard', 'normal'],
        // ['dashboard_recent_comments', 'dashboard', 'normal'],
        // ['dashboard_right_now', 'dashboard', 'normal'],
        // ['dashboard_plugins', 'dashboard', 'normal'],

        ['dashboard_primary', 'dashboard', 'side'],
        // ['dashboard_quick_press', 'dashboard', 'side'],
        // ['dashboard_recent_drafts', 'dashboard', 'side'],
        // ['dashboard_secondary', 'dashboard', 'side'],
    ],

    /**
     * @var     string  $key    The setting uniq key.
     * @param   array   $args   Define what to clean from the theme header frontend, via the "remove_action" hook.
     */
    'clean-headers' => [
        'adjacent_posts_rel_link_wp_head',
        'index_rel_link',
        'rsd_link',
        'wlwmanifest_link',
        'wp_admin_bar_init',
        'wp_dlmp_l10n_style',
        'wp_generator',
        'wp_shortlink_wp_head',
    ],

    /**
     * @var     string  $key    The setting uniq key.
     * @param   array   $fields Comment fields in wanted order.
     *
     * @see     https://developer.wordpress.org/reference/hooks/comment_form_fields/
     */
    'comments-fields-order' => [
        'author',
        'email',
        'url',
        'comment',
    ],

    /**
     * @var     string  $key    The setting uniq key.
     * @param   integer $number Image quality percentage (low = 0, high = 100).
     *
     * @see     https://developer.wordpress.org/reference/hooks/jpeg_quality/
     */
    'jpeg-quality' => 75,

    /**
     * @var     string  $key    The setting uniq key.
     * @param   boolean $shake  Define wether if WP has to shake the login box or not.
     *
     * @see     https://developer.wordpress.org/reference/hooks/login_head/
     */
    'login-shake' => false,

    /**
     * @var     string  $key    The setting uniq key.
     * @param   boolean $shut   Define wether if WP has to shut the DB connections off or not.
     *
     * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/shutdown
     */
    'shutdown' => true,
];
