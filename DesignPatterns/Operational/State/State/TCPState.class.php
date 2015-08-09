<?php


namespace DesignPatterns\Operational\State\State;


use DesignPatterns\Operational\State\TCPConnection\TCPConnection;

abstract class TCPState
{
    /**
     * @param TCPConnection $TCPConnection
     */
    abstract public function open(TCPConnection $TCPConnection);

    /**
     * @param TCPConnection $TCPConnection
     */
    abstract public function close(TCPConnection $TCPConnection);

    /**
     * @param TCPConnection $TCPConnection
     */
    abstract public function acknowledge(TCPConnection $TCPConnection);

    /**
     * @param TCPConnection $TCPConnection
     * @param TCPState $TCPState
     */
    public function changeState(TCPConnection $TCPConnection, TCPState $TCPState)
    {
        $TCPConnection->changeState($TCPState);
    }

    /**
     * @return TCPState
     */
    public static function Instance()
    {
        static $instance;
        if (!$instance[__CLASS__] instanceof static) {
            $instance[__CLASS__] = new static;
        }

        return $instance[__CLASS__] ;
    }
}
