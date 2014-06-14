<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class FactoryMethod
 * @package DesignPatterns\Creational\FactoryMethod
 */
abstract class FactoryMethod {

    const CAR = 1;
    const BIKE = 2;

    /**
     * @param $type
     * @return Vehicle\Vehicle
     */
    abstract protected function createVehicle($type);

    /**
     * @param $type
     * @return Vehicle\Vehicle
     */
    public function create($type)
    {
        $vehicle = $this->createVehicle($type);
        $vehicle->setColor('red');
        return $vehicle;
    }
}
