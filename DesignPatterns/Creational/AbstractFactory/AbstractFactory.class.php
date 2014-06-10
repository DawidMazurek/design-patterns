<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory
{

    abstract public function createProduct($name, $prize);

    abstract public function createTransaction($number, $amount, $currency);

}
