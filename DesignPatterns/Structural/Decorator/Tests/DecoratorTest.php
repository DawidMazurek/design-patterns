<?php

namespace DesignPatterns\Structural\Decorator\Tests;


use DesignPatterns\Structural\Decorator\BoldDecorator;
use DesignPatterns\Structural\Decorator\ItalicDecorator;

/**
 * Class DecoratorTest
 * @package DesignPatterns\Structural\Decorator\Tests
 */
class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testDecorator()
    {
        $decorator = new BoldDecorator(new ItalicDecorator("Placeholder text"));
        $this->assertEquals('<b><i>Placeholder text</i></b>', (string)$decorator);
    }
}
