<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Vehicle\Italian\Bike;
use DesignPatterns\Creational\FactoryMethod\Vehicle\Italian\Porshe;

/**
 * Class ItalianFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * @param $type
     * @return Vehicle\VehicleInterface
     * @throws \InvalidArgumentException
     */
    protected function createVehicle($type)
    {
        switch ($type) {

            case self::BIKE:
                return new Bike();
                break;

            case self::CAR:
                $porshe = new Porshe();
                $porshe->removeSpeedLimit();
                return $porshe;
                break;

            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
