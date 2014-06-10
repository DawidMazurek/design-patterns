<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 10.06.14
 * Time: 21:00
 */

namespace DesignPatterns\Creational\AbstractFactory\Xml;

use DesignPatterns\Creational\AbstractFactory\Renderable;

class Product implements Renderable{

    private $name;
    private $prize;

    public function __construct($name, $prize)
    {
        $this->name = $name;
        $this->prize = $prize;
    }

    public function render()
    {
        return "<product name='{$this->name}' prize='{$this->prize}' />";
    }
}