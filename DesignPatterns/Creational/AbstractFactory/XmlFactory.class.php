<?php

namespace DesignPatterns\Creational\AbstractFactory;

class XmlFactory extends AbstractFactory
{
    public function createProduct($name, $prize)
    {
        return new Xml\Product($name, $prize);
    }

    public function createTransaction($number, $amount, $currency)
    {
        return new Xml\Transaction($number, $amount, $currency);
    }
}
