<?php

namespace DesignPatterns\Structural\VirtualProxy;

/**
 * Class VirtualProxy
 * @package DesignPatterns\Structural\VirtualProxy
 */
class VirtualProxy extends RealSubject
{
    /**
     * @var RealSubject
     */
    protected $wrapped;

    /**
     * @param $cost
     */
    public function __construct($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        $this->init();
        return $this->wrapped->getResult();
    }

    /**
     *
     */
    private function init()
    {
        if ( ! $this->wrapped) {
            $this->wrapped = new RealSubject($this->cost);
        }
    }
}
