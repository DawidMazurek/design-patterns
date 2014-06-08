<?php

namespace test;

use \DesignPatterns\Creational\Builder\Director;
use \DesignPatterns\Creational\Builder\DrinkBuilder;
use \DesignPatterns\Creational\Builder\PackageBuilder;

class BuilderTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testDrinkBuilder()
    {

        $director = new Director(new DrinkBuilder());
        $product = $director->build();
        $this->assertInstanceOf('\DesignPatterns\Creational\Builder\Product\Drink', $product, 'Instance of Product\Drink');
        $this->assertInstanceOf('\DesignPatterns\Creational\Builder\Product\AbstractProduct', $product, 'Instance of Product\AbstractProduct');
    }

    /**
     *
     */
    public function testPackageBuilder()
    {

        $director = new Director(new PackageBuilder());
        $product = $director->build();
        $this->assertInstanceOf('\DesignPatterns\Creational\Builder\Product\Package', $product, 'Instance of Product\Package');
        $this->assertInstanceOf('\DesignPatterns\Creational\Builder\Product\AbstractProduct', $product, 'Instance of Product\AbstractProduct');

    }
}
