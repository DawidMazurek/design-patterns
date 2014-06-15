<?php

namespace DesignPatterns\Creational\Builder;


interface ProductBuilderInterface
{
    public function createProduct();

    public function fill();

    public function addLabel();

    public function getProduct();
}
