<?php
require_once __DIR__ . "/../Creational/Builder/ProductBuilder.class.php";
require_once __DIR__ . "/../Creational/Builder/PackageBuilder.class.php";
require_once __DIR__ . "/../Creational/Builder/DrinkBuilder.class.php";
require_once __DIR__ . "/../Creational/Builder/Director.class.php";
require_once __DIR__ . "/../Creational/Builder/Product/Drink.class.php";
require_once __DIR__ . "/../Creational/Builder/Product/Package.class.php";

use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\DrinkBuilder;
use DesignPatterns\Creational\Builder\PackageBuilder;

class BuilderTest extends \PHPUnit_Framework_TestCase {


    public function testDrinkBuilder() {

        $director = new Director( new DrinkBuilder() );
        $product = $director->build();
        $this->assertInstanceOf( 'DesignPatterns\Creational\Builder\Product\Drink', $product, 'Instance of Product\Drink' );

    }

   public function testPackageBuilder() {

       $director = new Director( new PackageBuilder() );
       $product = $director->build();
       $this->assertInstanceOf( 'DesignPatterns\Creational\Builder\Product\package', $product, 'Instance of Product\Package' );

   }


}