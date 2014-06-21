<?php

namespace DesignPatterns\Structural\Composite\Tests;

use DesignPatterns\Structural\Composite\Composite;
use DesignPatterns\Structural\Composite\Leaf;

/**
 * Class CompositeTest
 * @package DesignPatterns\Structural\Composite\Tests
 */
class CompositeTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testCompositeChildrenInstance()
    {
        $composite = new Composite();

        $composite->add(new Leaf('Leaf 1'));
        $composite->add(new Leaf('Leaf 2'));
        $composite->add(new Leaf('Leaf 3'));

        $this->assertInstanceOf('\DesignPatterns\Structural\Composite\Component', $composite->getChild(0));
    }

    /**
     *
     */
    public function testCompositeOperation()
    {
        $composite = new Composite();

        $composite->add(new Leaf('Leaf 1'));
        $composite->add(new Leaf('Leaf 2'));
        $composite->add(new Leaf('Leaf 3'));

        $this->assertEquals('green', $composite->getChild()->color);
        $composite->operation();
        $this->assertEquals('yellow', $composite->getChild()->color);
    }

    /**
     *
     */
    public function testCompositeRemove()
    {
        $composite = new Composite();

        $composite->add(new Leaf('Leaf 1'));
        $composite->add(new Leaf('Leaf 2'));
        $composite->add(new Leaf('Leaf 3'));


        while ($component = $composite->getChild()) {
            $composite->remove($component);
        }

        $this->assertFalse($composite->getChild());

    }
}
