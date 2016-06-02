<?php

/**
 * Add shortcodes.
 *
 * @category PHP
 * @package  Athena
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @license  https://github.com/GetOlympus/Athena/blob/master/LICENSE MIT
 * @link     https://github.com/GetOlympus/Athena
 * @since    0.0.1
 *
 * @see      https://developer.wordpress.org/reference/functions/add_shortcode/
 */


return [
    /**
     * Special case: media is usefull to enable media WP shortcode.
     * It does NOT accept any argument.
     */
    'media' => '',

    /**
     * @var     string $key    The shortcode uniq key.
     * @param   string $file   The shortcode JS file.
     */
    //'shortocde_key' => 'path/to/shortcode_file.js',
];
