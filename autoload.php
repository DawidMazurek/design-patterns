<?php
/**
 *
 *  AutoLoader
 *  Dynamic class loader ( namespace-based )
 *
 *  lib path '/lib'
 *
 *  namespace\classname => folder/class
 *
 *
 */

class AutoLoader
{
    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }


    public function loader($className) {
        $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace( '\\', DIRECTORY_SEPARATOR, $className ) .'.class.php';

        if (is_readable($path)) {
            require_once($path);
        }

        return NULL;
    }

}

new AutoLoader;