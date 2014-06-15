<?php


namespace DesignPatterns\Creational\Prototype;

/**
 * Class CarPrototype
 * @package DesignPatterns\Creational\Prototype
 */
abstract class CarPrototype
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var int
     */
    protected $serialNumber;

    /**
     * @abstract
     * @return void
     */
    abstract public  function __clone();

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color=$color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param int $serialNumber
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * @return int
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
}
