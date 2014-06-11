<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class XmlFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class XmlFactory extends AbstractFactory
{
    /**
     * @param string $name
     * @param int $prize
     * @return Xml\Product
     */
    public function createProduct($name, $prize)
    {
        return new Xml\Product($name, $prize);
    }

    /**
     * @param int $number
     * @param int $amount
     * @param string $currency
     * @return Xml\Transaction
     */
    public function createTransaction($number, $amount, $currency)
    {
        return new Xml\Transaction($number, $amount, $currency);
    }
}
