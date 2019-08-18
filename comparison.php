<?php
/*
Plugin Name: Comparison
Plugin URI: #
Description: a plugin for compare car models
Author: Erfan Kargosha
Author URI: #
Text Domain: Comparison
Version: 1.0.0
*/


final class Comparison{
    protected static $_instance;

    public static function get_instance()
    {
        if (is_null(self::$_instance)){
            self::$_instance = new self;
        }
    }

    public function __construct()
    {
        $this->init();
        $this->define_constants();
        $this->do_includes();
    }

    private function init()
    {
        defined('ABSPATH') || exit();
    }

    private function define_constants()
    {
        define('PLUGIN_DIR',plugin_dir_path(__FILE__));
        define('PLUGIN_URL',plugin_dir_url(__FILE__));
    }


    private function do_includes()
    {
        include PLUGIN_DIR.'functions.php';
    }
}

Comparison::get_instance();







