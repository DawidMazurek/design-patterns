<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;

/**
 * Class FactoryMethodTest
 * @package DesignPatterns\Creational\FactoryMethod\Tests
 */
class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testGermanBike()
    {
        $factory = new GermanFactory();
        $vehicle = $factory->create(GermanFactory::BIKE);
        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Vehicle\German\Bike', $vehicle);
    }

    /**
     *
     */
    public function testGermanCar()
    {
        $factory = new GermanFactory();
        $vehicle = $factory->create(GermanFactory::CAR);
        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Vehicle\German\Audi', $vehicle);
    }

    /**
     *
     */
    public function testItalianBike()
    {
        $factory = new ItalianFactory();
        $vehicle = $factory->create(ItalianFactory::BIKE);
        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Vehicle\Italian\Bike', $vehicle);
    }

    /**
     *
     */
    public function testItalianCar()
    {
        $factory = new ItalianFactory();
        $vehicle = $factory->create(ItalianFactory::CAR);
        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Vehicle\Italian\Porshe', $vehicle);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testGermanFactoryShouldThrowException()
    {
        $factory = new GermanFactory();
        $factory->create(3);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testItalianFactoryShouldThrowException()
    {
        $factory = new ItalianFactory();
        $factory->create(3);
    }
}
