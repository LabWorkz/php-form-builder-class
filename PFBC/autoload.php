<?php
/**
 *  Autoloader for the PFBC Library
 */

spl_autoload_register(function ($class_name) {

    if (false !== strpos($class_name, 'PFBC')) {
        $class_file = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, str_replace('PFBC', '', $class_name)) . '.php';
        if (file_exists($class_file)) {
            require_once $class_file;
        }
    }
});
