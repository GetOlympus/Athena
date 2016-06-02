<?php

/**
 * Add custom image sizes.
 *
 * @category PHP
 * @package  Athena
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @license  https://github.com/GetOlympus/Athena/blob/master/LICENSE MIT
 * @link     https://github.com/GetOlympus/Athena
 * @since    0.0.1
 *
 * @see      http://codex.wordpress.org/Function_Reference/add_image_size/
 */

return [
    /**
     * @var     string      $key    The size name.
     * @param   int         $width  The image width.
     * @param   int         $height The image height.
     * @param   bool|array  $crop   Crop option. Since 3.9, define a crop position with an array.
     * @param   string      $name   Add to media selection dropdown ~~ Put an empty string if you do not want this ~~
     */
    //'size_key'    => [size_width,     size_height,    size_crop_or_not,   size_label_in_dropdown],
    'athena-big'    => [1200, 0, true, __('Athena big size – 1200px width.', OL_TPL_DICTIONARY)],
];
