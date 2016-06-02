<?php

/**
 * Add theme and post type supports.
 *
 * @category PHP
 * @package  AthenaTheme
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @license  https://github.com/GetOlympus/Athena/blob/master/LICENSE MIT
 * @link     https://github.com/GetOlympus/Athena
 * @since    0.0.1
 *
 * @see      https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see      https://developer.wordpress.org/reference/functions/add_post_type_support/
 */

return [
    /**
     * Comment every support you do not need.
     *
     * Set to "false" to remove the theme support.
     */


    /**
     * Special case: for post type support, use the "post_type" key
     *
     * @see http://codex.wordpress.org/Function_Reference/add_post_type_support
     * @see http://codex.wordpress.org/Function_Reference/remove_post_type_support
     */
    'post_type' => [
        /**
         * Comment every support you do not need.
         *
         * @var     string  $key    The post_type slug.
         * @param   array   $args   The features to add with the action to make (add or remove).
         */
        // Supports can be:
        //  'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks'
        //  'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'
        'page' => [
            'add'    => ['excerpt', 'revisions'],
            'remove' => ['thumbnail'],
        ],
    ],


    /**
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Formats
     */
    'post-formats' => ['aside', 'chat', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio'],

    /**
     * Set an empty array as $args for all post types
     *
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    'post-thumbnails' => ['post', 'page'],

    /**
     * Set an empty array as $args for default vars
     *
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Background
     */
    'custom-background' => [
        'default-color'             => '',
        'default-image'             => '',
        'wp-head-callback'          => '_custom_background_cb',
        'admin-head-callback'       => '',
        'admin-preview-callback'    => '',
    ],

    /**
     * Set an empty array as $args for default vars
     *
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Header
     */
    'custom-header' => [
        'default-image'             => '',
        'random-default'            => false,
        'width'                     => 0,
        'height'                    => 0,
        'flex-height'               => false,
        'flex-width'                => false,
        'default-text-color'        => '',
        'header-text'               => true,
        'uploads'                   => true,
        'wp-head-callback'          => '',
        'admin-head-callback'       => '',
        'admin-preview-callback'    => '',
    ],

    /**
     * Set an empty array as $args for default vars
     *
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Logo
     */
    'custom-logo' => [
        'height'        => 100,
        'width'         => 400,
        'flex-height'   => true,
        'flex-width'    => true,
        'header-text'   => ['site-title', 'site-description'],
    ],

    /**
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
     */
    'automatic-feed-links' => false,

    /**
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
     */
    'html5' => ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption'],

    /**
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
     */
    'title-tag' => [],


    /**
     * Add your own theme supports here.
     */
    'woocommerce' => [],
];
