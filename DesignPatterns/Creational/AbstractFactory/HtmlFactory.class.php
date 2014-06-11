<?php

namespace DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory
{

    public function createProduct($name, $prize)
    {
        return new Html\Product($name, $prize);
    }

    public function createTransaction($number, $amount, $currency)
    {
        return new Html\Transaction($number, $amount, $currency);
    }
}
