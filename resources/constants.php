<?php

/**
 * Useful constants.
 *
 * @package AthenaTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 *
 */


/**
 * Global constants
 */

// Admin panel or not
defined('OL_ISADMIN')       or define('OL_ISADMIN', is_admin());

// Vendor package
defined('VENDOR_PATH')      or define('VENDOR_PATH', realpath(dirname(__DIR__)).S.'vendor'.S);

// Paths
defined('CONFIGS_PATH')     or define('CONFIGS_PATH', RESOURCES_PATH.'configs'.S);
defined('CONTROLLERS_PATH') or define('CONTROLLERS_PATH', RESOURCES_PATH.'controllers'.S);
defined('SHORTCODES_PATH')  or define('SHORTCODES_PATH', RESOURCES_PATH.'shortcodes'.S);
defined('VIEWS_PATH')       or define('VIEWS_PATH', RESOURCES_PATH.'views'.S);