<?php

namespace DesignPatterns\Structural\VirtualProxy;

/**
 * Class GhostObject
 * @package DesignPatterns\Structural\VirtualProxy
 */
class RealSubject
{
    /**
     * @var int
     */
    protected $result = 0;

    /**
     * @param $cost
     */
    public function __construct($cost)
    {
        $this->result = $this->calculate($cost);
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param $cost
     * @return int
     */
    private function calculate($cost)
    {
        $result = 1;

        for ($i=2;$i<=$cost;$i++) {
            $result*= $i;
        }
        return $result;
    }
}
