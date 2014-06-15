<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * Class Singleton
 * @package DesignPatterns\Creational\Singleton
 */
class Singleton
{

    /**
     * @var self
     */
    private static $instance;

    /**
     * @return self
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new static;
        }

        return static::$instance;
    }

    /**
     *
     */
    private function __construct()
    {
    }

    /**
     *
     */
    private function __clone()
    {
    }

    /**
     *
     */
    private function __wakeup()
    {
    }
}
