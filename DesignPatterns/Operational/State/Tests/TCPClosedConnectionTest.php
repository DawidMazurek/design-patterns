<?php


namespace DesignPatterns\Operational\State\Tests;


use DesignPatterns\Operational\State\State\TCPClosed;
use DesignPatterns\Operational\State\State\TCPEstablished;
use DesignPatterns\Operational\State\State\TCPListen;
use DesignPatterns\Operational\State\State\TCPState;
use DesignPatterns\Operational\State\TCPConnection\TCPConnection;

class TCPChangeStateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider changeStateDataProvider
     */
    public function testChangeState(TCPState $originalState, TCPState $targetState)
    {

        $TCPConnection = new TCPConnection($originalState);
        $TCPConnection->changeState($targetState);

        $expectedState = get_class($targetState);
        $this->assertInstanceOf(
            $expectedState,
            $TCPConnection->getState(),
            'TCPConnection wrong internal state'
        );
    }

    public function changeStateDataProvider()
    {
        return [
            [new TCPClosed(), new TCPEstablished()],
            [new TCPClosed(), new TCPClosed()],
            [new TCPClosed(), new TCPListen()],

            [new TCPEstablished(), new TCPEstablished()],
            [new TCPEstablished(), new TCPClosed()],
            [new TCPEstablished(), new TCPListen()],

            [new TCPListen(), new TCPEstablished()],
            [new TCPListen(), new TCPClosed()],
            [new TCPListen(), new TCPListen()]
        ];
    }

    /**
     * @dataProvider openDataProvider
     */
    public function testOpen(TCPState $originalState, TCPState $targetState)
    {
        $TCPConnection = new TCPConnection($originalState);
        $TCPConnection->open();
        $this->assertInstanceOf(
            get_class($targetState),
            $TCPConnection->getState(),
            'TCPConnection open wrong internal state'
            );
    }

    public function openDataProvider()
    {
        return [
            [new TCPClosed(), new TCPEstablished()],
            [new TCPEstablished(), new TCPEstablished()],
            [new TCPListen(), new TCPEstablished()]
        ];
    }

    /**
     * @dataProvider closeDataProvider
     */
    public function testClose(TCPState $originalState, TCPState $targetState)
    {
        $TCPConnection = new TCPConnection($originalState);
        $TCPConnection->close();
        $this->assertInstanceOf(
            get_class($targetState),
            $TCPConnection->getState(),
            'TCPConnection close wrong internal state'
            );
    }

    public function closeDataProvider()
    {
        return [
            [new TCPClosed(), new TCPClosed()],
            [new TCPEstablished(), new TCPClosed()],
            [new TCPListen(), new TCPClosed()]
        ];
    }

    /**
     * @dataProvider acknowledgeDataProvider
     */
    public function testAcknowledge(TCPState $originalState, TCPState $targetState)
    {
        $TCPConnection = new TCPConnection($originalState);
        $TCPConnection->acknowledge();
        $this->assertInstanceOf(
            get_class($targetState),
            $TCPConnection->getState(),
            'TCPConnection open wrong internal state'
            );
    }

    public function acknowledgeDataProvider()
    {
        return [
            [new TCPClosed(), new TCPListen()],
            [new TCPEstablished(), new TCPListen()],
            [new TCPListen(), new TCPListen()]
        ];
    }
}
