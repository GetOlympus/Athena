<?php

/**
 * Add sidebars.
 *
 * @category PHP
 * @package  AthenaTheme
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @license  https://github.com/GetOlympus/Athena/blob/master/LICENSE MIT
 * @link     https://github.com/GetOlympus/Athena
 * @since    0.0.1
 *
 * @see      https://developer.wordpress.org/reference/functions/register_sidebar/
 */

return [
    /**
     * @var     string  $key    The sidebar uniq key.
     * @param   array   $args   The sidebar arguments.
     */
    'primary-sidebar' => [
        'name'          => __('Primary sidebar', OL_TPL_DICTIONARY),
        'description'   => __('Area of your primary sidebar', OL_TPL_DICTIONARY),
        'class'         => 'primary-class',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ],
];
