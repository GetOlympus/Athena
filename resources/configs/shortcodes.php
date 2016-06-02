<?php

/**
 * Add shortcodes.
 *
 * @category PHP
 * @package  AthenaTheme
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
     * Each shortcode can be custimzed thanks to the Filter hook "olh_shortcodes_$key".
     * The hook function needs 2 arguments:
     * array    $atts       Shortcode attributes    ie. [shortcode att_1="value_1" att_2="value_2"] ... [/shortcode]
     * string   $content    Shortcode content       ie. [shortcode...] my contents in text or raw HTML [/shortcode]
     *
     * @var     string $key    The shortcode uniq key.
     * @param   string $file   The shortcode JS file.
     */
    //'shortocde_key' => 'path/to/shortcode_file.js',
];
