<?php

namespace DesignPatterns\Creational\Builder;

/**
 * Class Director
 * @package DesignPatterns\Creational\Builder
 */
class Director
{

    /**
     * @param ProductBuilderInterface $builder
     */
    public function __construct(ProductBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @return Product\AbstractProduct
     */
    public function build()
    {

        $this->builder->createProduct();
        $this->builder->fill();
        $this->builder->addLabel();

        return $this->builder->getProduct();
    }
}
