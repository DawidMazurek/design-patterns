<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 14.06.14
 * Time: 20:33
 */

namespace DesignPatterns\Creational\FactoryMethod\Vehicle\German;

use DesignPatterns\Creational\FactoryMethod\Vehicle\VehicleInterface;

/**
 * Class Bike
 * @package DesignPatterns\Creational\FactoryMethod\Vehicle\German
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
