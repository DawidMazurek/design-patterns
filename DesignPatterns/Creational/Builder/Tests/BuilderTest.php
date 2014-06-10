<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use \DesignPatterns\Creational\Builder\Director;
use \DesignPatterns\Creational\Builder\DrinkBuilder;
use \DesignPatterns\Creational\Builder\PackageBuilder;

/**
 * Class BuilderTest
 * @package test
 */
class BuilderTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testDrinkBuilder()
    {

        $director = new Director(new DrinkBuilder());
        $product = $director->build();

        $expectedDrink = '\DesignPatterns\Creational\Builder\Product\Drink';
        $expectedProduct = '\DesignPatterns\Creational\Builder\Product\AbstractProduct';

        $this->assertInstanceOf($expectedDrink, $product, 'Instance of Product\Drink');
        $this->assertInstanceOf($expectedProduct, $product, 'Instance of Product\AbstractProduct');
    }

    /**
     *
     */
    public function testPackageBuilder()
    {

        $director = new Director(new PackageBuilder());
        $product = $director->build();

        $expectedPackage = '\DesignPatterns\Creational\Builder\Product\Package';
        $expectedProduct = '\DesignPatterns\Creational\Builder\Product\AbstractProduct';

        $this->assertInstanceOf($expectedPackage, $product, 'Instance of Product\Package');
        $this->assertInstanceOf($expectedProduct, $product, 'Instance of Product\AbstractProduct');

    }
}
