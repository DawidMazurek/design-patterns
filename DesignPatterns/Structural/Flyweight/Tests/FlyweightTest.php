<?php

namespace DesignPatterns\Structural\Flyweight\Tests;

use DesignPatterns\Structural\Flyweight\FlyweightFactory;

/**
 * Class FlyweightTest
 * @package DesignPatterns\Structural\Flyweight\Tests
 */
class FlyweightTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testFlyweight()
    {
        $flyweightFactory = new FlyweightFactory();

        $flyweight1 = $flyweightFactory->getFlyweight(FlyweightFactory::TYPE_A, "Flyweight1");
        $flyweight2 = $flyweightFactory->getFlyweight(FlyweightFactory::TYPE_B, "Flyweight2");
        $flyweight3 = $flyweightFactory->getFlyweight(FlyweightFactory::TYPE_A, "Flyweight1");

        $this->assertSame($flyweight1, $flyweight3);
        $this->assertNotSame($flyweight1, $flyweight2);
    }

    /**
     * @expectedException \DesignPatterns\Structural\Flyweight\IncorrectFlyweightType
     */
    public function testFlyweightFactoryIncorrectTypeException()
    {
        $flyweightFactory = new FlyweightFactory();
        $flyweight = $flyweightFactory->getFlyweight(3, "Flyweight1");
    }
}
