<?php

namespace DesignPatterns\Creational\Prototype\Tests;

use DesignPatterns\Creational\Prototype\CarAssemblyLine;

/**
 * Class PrototypeTest
 * @package DesignPatterns\Creational\Prototype\Tests
 */
class PrototypeTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testPrototype()
    {
        $expectedCarsNumber = 10000;
        $carAssemblyLine = new CarAssemblyLine();
        $collection = $carAssemblyLine->assemblyAudi($expectedCarsNumber);
        $this->assertCount($expectedCarsNumber, $collection, 'Cars assembled collection');
        $this->assertContainsOnlyInstancesOf('DesignPatterns\Creational\Prototype\AudiCarPrototype', $collection);
    }
}
