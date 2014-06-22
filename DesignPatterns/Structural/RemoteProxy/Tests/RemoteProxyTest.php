<?php

namespace DesignPatterns\Structural\RemoteProxy\Tests;

use DesignPatterns\Structural\RemoteProxy\Api;
use DesignPatterns\Structural\RemoteProxy\RealSubject;
use DesignPatterns\Structural\RemoteProxy\SubjectProxy;

/**
 * Class RemoteProxyTest
 * @package DesignPatterns\Structural\RemoteProxy\Tests
 */
class RemoteProxyTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testRemoteProxy()
    {
        $api = new Api();

        $subjectProxy = new SubjectProxy($api, 1);
        $subjectProxyText = $subjectProxy->getText();

        $realSubject = new RealSubject(['text'=>'Remote1']);
        $realSubjectText = $realSubject->getText();
        $this->assertEquals($subjectProxyText, $realSubjectText);
    }
}
