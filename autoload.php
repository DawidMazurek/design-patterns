<?php

namespace Autoloader;

/**
 * Class AutoLoader
 * @package Autoloader
 */
class AutoLoader
{
    /**
     * Registers a loader
     */
    public function __construct()
    {
        spl_autoload_register(array($this, 'loader'));
    }

    /**
     * @param string $className
     * @return null
     */
    public function loader($className)
    {
        $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) .'.class.php';

        if (is_readable($path)) {
            require_once($path);
        }

        return null;
    }
}

new AutoLoader;
