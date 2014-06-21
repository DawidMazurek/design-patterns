<?php

namespace DesignPatterns\Structural\Bridge\Tests;

use DesignPatterns\Structural\Bridge\ConcreteImplementor;
use DesignPatterns\Structural\Bridge\RefinedAbstraction;

/**
 * Class BridgeTest
 * @package DesignPatterns\Structural\Bridge\Tests
 */
class BridgeTest extends \PHPUnit_Framework_TestCase
{

    public function testBridge()
    {

        $concreteImplementor = new ConcreteImplementor();
        $refinedAbstraction = new RefinedAbstraction();
        $refinedAbstraction->operation($concreteImplementor);

        $this->assertTrue($concreteImplementor->isOperated());
    }
}
