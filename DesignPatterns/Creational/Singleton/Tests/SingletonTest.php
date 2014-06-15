<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;

/**
 * Class SingletonTest
 * @package DesignPatterns\Creational\Singleton\Tests
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testSameInstance()
    {
        $singleton1 = Singleton::getInstance();
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $singleton1);
        $singleton2 = Singleton::getInstance();
        $this->assertSame($singleton1, $singleton2);
    }

    /**
     *
     */
    public function testInstanceHasPersistentAttribute()
    {
        $singleton1 = Singleton::getInstance();
        $singleton1->attribute = true;

        $singleton2 = Singleton::getInstance();
        $this->assertObjectHasAttribute('attribute', $singleton2);
    }
}