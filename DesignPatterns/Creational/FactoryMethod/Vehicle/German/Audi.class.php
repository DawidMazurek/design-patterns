<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 14.06.14
 * Time: 20:33
 */

namespace DesignPatterns\Creational\FactoryMethod\Vehicle\German;

use DesignPatterns\Creational\FactoryMethod\Vehicle\Vehicle;

/**
 * Class Audi
 * @package DesignPatterns\Creational\FactoryMethod\Vehicle\German
 */
class Audi implements Vehicle
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
