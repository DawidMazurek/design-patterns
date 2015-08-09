<?php


namespace DesignPatterns\Operational\State\TCPConnection;


use DesignPatterns\Operational\State\State\TcpState;

class TCPConnection
{

    /**
     * @var TcpState
     */
    protected $TCPState;

    /**
     * @param TcpState $TCPState
     */
    public function __construct(TcpState $TCPState)
    {
        $this->TCPState = $TCPState;
    }

    /**
     *
     */
    public function open()
    {
        $this->TCPState->open($this);
    }

    /**
     *
     */
    public function close()
    {
        $this->TCPState->close($this);
    }

    /**
     *
     */
    public function acknowledge()
    {
        $this->TCPState->acknowledge($this);
    }

    /**
     * @param TcpState $TCPState
     */
    public function changeState(TcpState $TCPState)
    {
        $this->TCPState = $TCPState;
    }

    /**
     * @return TcpState
     */
    public function getState()
    {
        return $this->TCPState;
    }
}
