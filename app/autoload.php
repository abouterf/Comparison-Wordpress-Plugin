<?php

class autoloader {

    public function __construct() {
        spl_autoload_register( array( $this, 'autoloader' ) );
    }

    public function autoloader( $class_name ) {
        $file = $this->convert_to_file( $class_name );
        if ( is_file( $file ) && is_readable( $file ) ) {
            include $file;
        }
    }

    public function convert_to_file( $class_name ) {
        $class     = strtolower( $class_name );
        $class     = str_replace( '_', '-', $class );
        $class     = 'class-' . $class;
        $file_name = $class . '.php';

        return PLUGIN_DIR . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $file_name;
    }
}

new autoloader();