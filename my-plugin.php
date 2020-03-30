<?php

/**
 * Plugin Name:       My Plugin
 * Plugin URI:        
 * Description:       My Plugin description
 * Version:           1.0.0
 * Author:            Vicente Scópise
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

if (!class_exists('PXE_My_plugin')) :

    class PXE_My_plugin
    {
        protected static $instance = NULL;

        public static function get_instance()
        {
            if (null === self::$instance) {
                self::$instance = new self;
            }
            return self::$instance;
        }

        public function __construct()
        {
        }
    }

    $PXE_My_plugin = new PXE_My_plugin;

endif;
