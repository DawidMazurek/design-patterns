<?php

namespace DesignPatterns\Structural\Facade;

/**
 * Class Sensor
 * @package DesignPatterns\Structural\Facade
 */
class Sensor implements SensorInterface
{

    /**
     * @var int
     */
    private $counter = 0;

    /**
     * @return bool
     */
    public function isClearWay()
    {
        return ($this->counter++ < 5);
    }
}
