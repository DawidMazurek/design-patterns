<?php

namespace DesignPatterns\Creational\Builder;

/**
 * Class DrinkBuilder
 * @package DesignPatterns\Creational\Builder
 */
class DrinkBuilder implements ProductBuilderInterface
{
    /**
     * @var Product\Drink
     */
    private $drink;

    /**
     *
     */
    public function createProduct()
    {
        $this->drink = new Product\Drink();
    }

    /**
     *
     */
    public function fill()
    {
        $this->drink->setFilledLitres(2.5);
    }

    /**
     *
     */
    public function addLabel()
    {
        $this->drink->glueLabel('Apple Drink');
    }

    /**
     * @return Product\Drink
     */
    public function getProduct()
    {
        return $this->drink;
    }
}
