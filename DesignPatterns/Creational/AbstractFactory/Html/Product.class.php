<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Renderable;

/**
 * Class Product
 * @package DesignPatterns\Creational\AbstractFactory\Html
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
        return "<div><p>Name: {$this->name}</p><p>Prize: {$this->prize}</p></div>";
    }
}
