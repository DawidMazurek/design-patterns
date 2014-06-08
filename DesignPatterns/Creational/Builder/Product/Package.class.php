<?php

namespace DesignPatterns\Creational\Builder\Product;


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
