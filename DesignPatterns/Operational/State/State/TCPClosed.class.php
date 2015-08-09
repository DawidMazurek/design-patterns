<?php


namespace DesignPatterns\Operational\State\State;


use DesignPatterns\Operational\State\TCPConnection\TCPConnection;

class TCPClosed extends TCPState
{
    /**
     * @param TCPConnection $TCPConnection
     */
    public function open(TCPConnection $TCPConnection)
    {
        $this->changeState($TCPConnection, TCPEstablished::Instance());
    }

    /**
     * @param TCPConnection $TCPConnection
     */
    public function close(TCPConnection $TCPConnection)
    {
        $this->changeState($TCPConnection, TCPClosed::Instance());
    }

    /**
     * @param TCPConnection $TCPConnection
     */
    public function acknowledge(TCPConnection $TCPConnection)
    {
        $this->changeState($TCPConnection, TCPListen::Instance());
    }
}
