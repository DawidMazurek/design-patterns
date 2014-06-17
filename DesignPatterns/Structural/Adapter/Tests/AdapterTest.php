<?php

namespace DesignPatterns\Structural\Adapter\Tests;


use DesignPatterns\Structural\Adapter\Shape;
use DesignPatterns\Structural\Adapter\Square;

/**
 * Class AdapterTest
 * @package DesignPatterns\Structural\Adapter\Tests
 */
class AdapterTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testShape()
    {
        $square = new Square();

        $shape = new Shape($square);
        $shape->draw(0, 0);
        $shape->moveTo(2, 5);
        $this->assertSame(['posX' => 2, 'posY' => 5], $square->getCoords());
    }
}
