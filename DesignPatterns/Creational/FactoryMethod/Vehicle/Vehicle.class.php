<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 14.06.14
 * Time: 20:39
 */

namespace DesignPatterns\Creational\FactoryMethod\Vehicle;

/**
 * Interface Vehicle
 * @package DesignPatterns\Creational\FactoryMethod\Vehicle
 */
interface Vehicle
{
    /**
     * @param string $color
     */
    public function setColor($color);
}
