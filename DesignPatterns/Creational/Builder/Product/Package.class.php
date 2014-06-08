<?php

namespace DesignPatterns\Creational\Builder\Product;

/**
 * Class Package
 * @package DesignPatterns\Creational\Builder\Product
 */
class Package extends AbstractProduct
{
    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $label;

    /**
     * @param int $number
     */
    public function setContainingElementsNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }
}
