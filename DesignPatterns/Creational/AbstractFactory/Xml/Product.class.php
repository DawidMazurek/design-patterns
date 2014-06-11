<?php

namespace DesignPatterns\Creational\AbstractFactory\Xml;

use DesignPatterns\Creational\AbstractFactory\Renderable;

/**
 * Class Product
 * @package DesignPatterns\Creational\AbstractFactory\Xml
 */
class Product implements Renderable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $prize;

    /**
     * @param string $name
     * @param int $prize
     */
    public function __construct($name, $prize)
    {
        $this->name = $name;
        $this->prize = $prize;
    }

    /**
     * @return string
     */
    public function render()
    {
        return "<product name='{$this->name}' prize='{$this->prize}' />";
    }
}
