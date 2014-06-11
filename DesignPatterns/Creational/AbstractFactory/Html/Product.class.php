<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Renderable;

class Product implements Renderable
{

    private $name;
    private $prize;

    public function __construct($name, $prize)
    {
        $this->name = $name;
        $this->prize = $prize;
    }

    public function render()
    {
        return "<div><p>Name: {$this->name}</p><p>Prize: {$this->prize}</p></div>";
    }
}
