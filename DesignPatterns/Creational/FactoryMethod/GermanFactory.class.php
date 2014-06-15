<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Vehicle\German\Audi;
use DesignPatterns\Creational\FactoryMethod\Vehicle\German\Bike;

/**
 * Class GermanFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
class GermanFactory extends FactoryMethod
{
    /**
     * @param int $type
     * @return Vehicle\Vehicle
     * @throws \InvalidArgumentException
     */
    protected function createVehicle($type)
    {
        switch ($type) {

            case self::BIKE:
                return new Bike();
                break;

            case self::CAR:
                return new Audi();
                break;

            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }

    }
}
