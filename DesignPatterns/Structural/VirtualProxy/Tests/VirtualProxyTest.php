<?php

namespace DesignPatterns\Structural\VirtualProxy\Tests;

use DesignPatterns\Structural\VirtualProxy\RealSubject;
use DesignPatterns\Structural\VirtualProxy\VirtualProxy;

/**
 * Class VirtualProxyTest
 * @package DesignPatterns\Structural\VirtualProxy\Tests
 */
class VirtualProxyTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testVirtualProxy()
    {

        $virtualProxy = new VirtualProxy(3);
        $proxyResult = $virtualProxy->getResult();

        $realSubject = new RealSubject(3);
        $ghostObjectResult = $realSubject->getResult();

        $this->assertEquals($proxyResult, $ghostObjectResult);
    }
}
