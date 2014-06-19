<?php

namespace DesignPatterns\Structural\Facade;

/**
 * Class RobotFacade
 * @package DesignPatterns\Structural\Facade
 */
class RobotFacade
{

    /**
     * @var SensorInterface
     */
    protected $sensor;

    /**
     * @var EngineInterface
     */
    protected $engine;

    /**
     * @param SensorInterface $sensor
     * @param EngineInterface $engine
     */
    public function __construct(SensorInterface $sensor, EngineInterface $engine)
    {
        $this->sensor = $sensor;
        $this->engine = $engine;
    }

    /**
     *
     */
    public function driveStraight()
    {
        while ($this->sensor->isClearWay()) {
            $this->engine->throttle();
        }
    }
}
