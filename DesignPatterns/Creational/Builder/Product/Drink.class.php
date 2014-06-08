<?php

namespace DesignPatterns\Creational\Builder\Product;


class Drink
{

    public $litres;
    public $label;

    public function setFilledLitres($litres)
    {
        $this->litres = $litres;
    }

    public function glueLabel($label)
    {
        $this->label = $label;
    }
}
