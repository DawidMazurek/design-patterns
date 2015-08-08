<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 14.06.14
 * Time: 20:33
 */

namespace DesignPatterns\Creational\FactoryMethod\Vehicle\Italian;

use DesignPatterns\Creational\FactoryMethod\Vehicle\VehicleInterface;

/**
 * Class Porshe
 * @package DesignPatterns\Creational\FactoryMethod\Vehicle\Italian
 */
class Porshe implements VehicleInterface
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var bool
     */
    private $speedLimitRemoved = false;

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     *
     */
    public function removeSpeedLimit()
    {
        $this->speedLimitRemoved = true;
    }

    /**
     * @return bool
     */
    public function isSpeedLimitRemoved()
    {
        return $this->speedLimitRemoved;
    }
}
