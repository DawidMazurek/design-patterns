<?php


namespace DesignPatterns\Operational\State\TCPConnection;


use DesignPatterns\Operational\State\State\TCPState;

class TCPConnection
{

    /**
     * @var TCPState
     */
    protected $TCPState;

    /**
     * @param TCPState $TCPState
     */
    public function __construct(TCPState $TCPState)
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
     * @param TCPState $TCPState
     */
    public function changeState(TCPState $TCPState)
    {
        $this->TCPState = $TCPState;
    }

    /**
     * @return TCPState
     */
    public function getState()
    {
        return $this->TCPState;
    }
}
