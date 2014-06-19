<?php

namespace DesignPatterns\Structural\Facade\Tests;


use DesignPatterns\Structural\Facade\Engine;
use DesignPatterns\Structural\Facade\RobotFacade;
use DesignPatterns\Structural\Facade\Sensor;

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testFacade()
    {

        $sensor = new Sensor();
        $engine = new Engine();

        $initialWay = $engine->getDoneWay();

        $robotFacade = new RobotFacade($sensor, $engine);
        $robotFacade->driveStraight();

        $endWay = $engine->getDoneWay();

        $this->assertGreaterThan($initialWay, $endWay);

    }
}
