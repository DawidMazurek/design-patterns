<?php

namespace DesignPatterns\Creational\Builder\Product;


class Package
{

    public $number;
    public $label;

    public function setContainingElementsNumber($number)
    {
        $this->number = $number;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }
}
