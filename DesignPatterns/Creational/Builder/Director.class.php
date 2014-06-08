<?php

namespace DesignPatterns\Creational\Builder;


class Director
{

    public function __construct(ProductBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function build()
    {

        $this->builder->createProduct();
        $this->builder->fill();
        $this->builder->addLabel();

        return $this->builder->getProduct();
    }

}
