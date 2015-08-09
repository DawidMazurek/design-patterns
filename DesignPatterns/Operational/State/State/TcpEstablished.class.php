<?php


namespace DesignPatterns\Operational\State\State;


use DesignPatterns\Operational\State\TCPConnection\TCPConnection;

class TcpEstablished extends TcpState
{
    /**
     * @param TCPConnection $TCPConnection
     */
    public function open(TCPConnection $TCPConnection)
    {
        $this->changeState($TCPConnection, TcpEstablished::Instance());
    }

    /**
     * @param TCPConnection $TCPConnection
     */
    public function close(TCPConnection $TCPConnection)
    {
        $this->changeState($TCPConnection, TcpClosed::Instance());
    }

    /**
     * @param TCPConnection $TCPConnection
     */
    public function acknowledge(TCPConnection $TCPConnection)
    {
        $this->changeState($TCPConnection, TcpListen::Instance());
    }
}
