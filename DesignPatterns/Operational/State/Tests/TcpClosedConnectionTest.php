<?php


namespace DesignPatterns\Operational\State\Tests;


use DesignPatterns\Operational\State\State\TcpClosed;
use DesignPatterns\Operational\State\State\TcpEstablished;
use DesignPatterns\Operational\State\State\TcpListen;
use DesignPatterns\Operational\State\State\TcpState;
use DesignPatterns\Operational\State\TCPConnection\TcpConnection;

class TCPChangeStateTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider changeStateDataProvider
     */
    public function testChangeState(TcpState $originalState, TcpState $targetState)
    {

        $TCPConnection = new TcpConnection($originalState);
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
            [new TcpClosed(), new TcpEstablished()],
            [new TcpClosed(), new TcpClosed()],
            [new TcpClosed(), new TcpListen()],

            [new TcpEstablished(), new TcpEstablished()],
            [new TcpEstablished(), new TcpClosed()],
            [new TcpEstablished(), new TcpListen()],

            [new TcpListen(), new TcpEstablished()],
            [new TcpListen(), new TcpClosed()],
            [new TcpListen(), new TcpListen()]
        ];
    }

    /**
     * @dataProvider openDataProvider
     */
    public function testOpen(TcpState $originalState, TcpState $targetState)
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
            [new TcpClosed(), new TcpEstablished()],
            [new TcpEstablished(), new TcpEstablished()],
            [new TcpListen(), new TcpEstablished()]
        ];
    }

    /**
     * @dataProvider closeDataProvider
     */
    public function testClose(TcpState $originalState, TcpState $targetState)
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
            [new TcpClosed(), new TcpClosed()],
            [new TcpEstablished(), new TcpClosed()],
            [new TcpListen(), new TcpClosed()]
        ];
    }

    /**
     * @dataProvider acknowledgeDataProvider
     */
    public function testAcknowledge(TcpState $originalState, TcpState $targetState)
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
            [new TcpClosed(), new TcpListen()],
            [new TcpEstablished(), new TcpListen()],
            [new TcpListen(), new TcpListen()]
        ];
    }
}
