<?php

namespace AthenaTheme;

use GetOlympus\Hera\Hera;

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
    class AthenaTheme
    {
        /**
         * @var GetOlympus\Hera\Hera
         */
        protected $application = null;

        /**
         * @var AthenaTheme
         */
        protected static $instance = null;

        /**
         * Constructor.
         */
        public function __construct()
        {
            // Load Hera framework vendors.
            if (file_exists($autoload = VENDORPATH.'autoload.php')) {
                include $autoload;
            }

            // Check Hera framework.
            $this->check();
        }

        /**
         * Check if Hera Application class is loaded.
         */
        protected function check()
        {
            // Die everything properly
            if (!class_exists('GetOlympus\Hera\Hera')) {
                // Admin panel
                if (OL_ISADMIN) {
                    add_filter('admin_notices', function () {
                        $content = '<div id="message" class="error">';
                        $content .= '<p>'.__('This theme works especially with the <b>Hera library</b>. Please, go to <a href="https://github.com/GetOlympus/Hera" target="_blank">the official repository</a> and download the package in your mu-plugins folder.').'</p>';
                        $content .= '</div>';
                    });

                    return;
                }

                // Frontend panel
                wp_die(__('The <strong>Athena theme</strong> cannot work properly. Please, contact your administrator.'));
                return;
            }

            // Instanciate a new Hera application
            $this->application = new Hera();

            // Load custom components
            $this->load();
        }

        /**
         * Gets the application.
         *
         * @return AthenaTheme
         */
        public function getApplication()
        {
            return $this->application;
        }

        /**
         * Gets the value of instance.
         *
         * @return AthenaTheme
         */
        public static function getInstance()
        {
            if (is_null(static::$instance)) {
                static::$instance = new static();
            }

            return static::$instance;
        }

        /**
         * Load custom components.
         *
         * @return AthenaTheme
         */
        protected function load()
        {
            /**
             * Work here.
             */

            /**
             * Initialize custom components.
             *
             * Add simply here all your required folders.
             * Hera application will load classes as a map
             * and initialize them.
             *
             * @param string    $classname
             * @param array     $components
             */
            $this->application->initComponents('athena', [
                // Folders to load
                CONTROLLERS_PATH.'posttypes',
                CONTROLLERS_PATH.'widgets',
            ]);

            /**
             * Initialize configurations
             *
             * Add configuration you need to iniitlaize.
             * You can init 5 kinds of configurators:
             *
             * - MenusConfiguration able to add custom menus navigation
             * - ShortcodesConfiguration able to add custom shortcodes
             * - SidebarsConfiguration able to add custom sidebars and widgets areas
             * - SizesConfiguration able to add custom media sizes
             * - SupportsConfiguration able to add post types and themes supports
             *
             * @param array $args
             */
            $this->application->initConfigs([
                // Alias to load                => File path to associate
                'MenusConfiguration'            => CONFIGS_PATH.'menus.php',
                'SettingsConfiguration'         => CONFIGS_PATH.'settings.php',
                'ShortcodesConfiguration'       => CONFIGS_PATH.'shortcodes.php',
                'SidebarsConfiguration'         => CONFIGS_PATH.'sidebars.php',
                'SizesConfiguration'            => CONFIGS_PATH.'sizes.php',
                'SupportsConfiguration'         => CONFIGS_PATH.'supports.php',
            ]);
        }
    }
}

// Instanciate AthenaTheme
$athena = AthenaTheme::getInstance();
