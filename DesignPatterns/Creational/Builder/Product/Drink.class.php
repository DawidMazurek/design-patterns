<?php

namespace DesignPatterns\Creational\Builder\Product;

/**
 * Class Drink
 * @package DesignPatterns\Creational\Builder\Product
 */
class Drink extends AbstractProduct
{
    /**
     * @var int
     */
    public $litres;

    /**
     * @var string
     */
    public $label;

    /**
     * @param int $litres
     */
    public function setFilledLitres($litres)
    {
        $this->litres = $litres;
    }

    /**
     * @param string $label
     */
    public function glueLabel($label)
    {
        $this->label = $label;
    }
}
