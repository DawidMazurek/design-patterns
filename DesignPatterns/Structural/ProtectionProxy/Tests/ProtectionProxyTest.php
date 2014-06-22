<?php

namespace DesignPatterns\Structural\ProtectionProxy\Tests;

use DesignPatterns\Structural\ProtectionProxy\Api;
use DesignPatterns\Structural\ProtectionProxy\ApiProtection;

/**
 * Class ProtectionProxyTest
 * @package DesignPatterns\Structural\ProtectionProxy\Tests
 */
class ProtectionProxyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \DesignPatterns\Structural\ProtectionProxy\RemoteApiLimit
     */
    public function testProtectionProxy()
    {
        $api = new ApiProtection(new Api(), 10);

        while (true) {
            $api->doStuff(); // RemoteApiLimit exception!
        }
    }
}
