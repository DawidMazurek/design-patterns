<?php

namespace DesignPatterns\Creational\Builder;


class PackageBuilder implements ProductBuilderInterface
{

    private $package;

    public function createProduct()
    {
        $this->package = new Product\Package();
    }

    public function fill()
    {
        $this->package->setContainingElementsNumber( 5 );
    }

    public function addLabel()
    {
        $this->package->setLabel( "Pack of cigarettes" );
    }

    public function getProduct()
    {
        return $this->package;
    }

}
