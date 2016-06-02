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
     * @param   string  $html   HTML snippet to display.
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
];
