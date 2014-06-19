<?php

namespace DesignPatterns\Structural\Facade;

/**
 * Class Engine
 * @package DesignPatterns\Structural\Facade
 */
class Engine implements EngineInterface
{

    /**
     * @var int
     */
    private $doneWay = 0;

    /**
     *
     */
    public function throttle()
    {
        $this->doneWay++;
    }

    /**
     * @return int
     */
    public function getDoneWay()
    {
        return $this->doneWay;
    }
}
