<?php

namespace DesignPatterns\Creational\FactoryMethod\Vehicle\Italian;

use DesignPatterns\Creational\FactoryMethod\Vehicle\VehicleInterface;

/**
 * Class Bike
 * @package DesignPatterns\Creational\FactoryMethod\Vehicle\Italian
 */
class Bike implements VehicleInterface
{
    /**
     * @var string
     */
    public $color;

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}
