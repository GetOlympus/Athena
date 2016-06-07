<?php

namespace AthenaTheme;

/**
 * Everything starts here.
 *
 * @package AthenaTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 *
 */


/**
 * Require constants
 */

// Directory separator and Resources path.
defined('S')                or define('S', DIRECTORY_SEPARATOR);
defined('RESOURCES_PATH')   or define('RESOURCES_PATH', __DIR__.S.'resources'.S);

// Require constants
require_once RESOURCES_PATH.'constants.php';


/**
 * AthenaTheme class
 */

if (!class_exists('AthenaTheme')) {
    class AthenaTheme extends \GetOlympus\Hera\Hera
    {
        /**
         * Constructor.
         */
        protected function setVars()
        {
            // Load Hera framework vendors.
            if (file_exists($autoload = VENDORPATH.'autoload.php')) {
                include $autoload;
            }

            /**
             * Start working here.
             */

            /**
             * Initialize configurations
             *
             * Add configuration you need to iniitlaize.
             * You can init 5 kinds of configurators:
             *
             * - MenusConfiguration able to add custom menus navigation
             * - SettingsConfiguration able to add custom backend and frontend settings
             * - ShortcodesConfiguration able to add custom shortcodes
             * - SidebarsConfiguration able to add custom sidebars and widgets areas
             * - SizesConfiguration able to add custom media sizes
             * - SupportsConfiguration able to add post types and themes supports
             *
             * @param array $args
             */
            $this->configurations = [
                // Alias to load                => File path to associate
                'MenusConfiguration'            => CONFIGS_PATH.'menus.php',
                'SettingsConfiguration'         => CONFIGS_PATH.'settings.php',
                'ShortcodesConfiguration'       => CONFIGS_PATH.'shortcodes.php',
                'SidebarsConfiguration'         => CONFIGS_PATH.'sidebars.php',
                'SizesConfiguration'            => CONFIGS_PATH.'sizes.php',
                'SupportsConfiguration'         => CONFIGS_PATH.'supports.php',
            ];

            /**
             * Initialize custom components.
             *
             * Add simply here all your required folders.
             * Hera application will load classes as a map
             * and initialize them.
             * You can init 3 kinds of objects:
             *
             * - posttypes which contains all your custom post types
             * - terms which contains all your custom terms and taxonomies
             * - widgets which contains all your custom widgets
             *
             * @param string    $folderpath
             */
            $this->paths = [
                CONTROLLERS_PATH.'posttypes',
                CONTROLLERS_PATH.'terms',
            ];

            /**
             * Initialize custom widgets.
             *
             * Widgets are separated from the others components
             * because they need a specific hook.
             *
             * @param string    $folderpath
             */
            $this->widgets = CONTROLLERS_PATH.'widgets';
        }
    }
}

// Instanciate AthenaTheme
$athena = new AthenaTheme();
