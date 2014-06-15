<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class CarAssemblyLine
 * @package DesignPatterns\Creational\Prototype
 */
class CarAssemblyLine
{

    /**
     * @param $number
     * @return array
     */
    public function assemblyAudi($number)
    {

        $audiCarPrototype = new AudiCarPrototype();
        $collection = [];
        for ($serialNumber = 0; $serialNumber < $number; $serialNumber++) {
            $car = clone($audiCarPrototype);
            $car->setSerialNumber($serialNumber);
            $collection [] = $car;
        }
        return $collection;
    }
}
