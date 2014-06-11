<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class HtmlFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{

    /**
     * @param string $name
     * @param int $prize
     * @return Html\Product
     */
    public function createProduct($name, $prize)
    {
        return new Html\Product($name, $prize);
    }

    /**
     * @param int $number
     * @param int $amount
     * @param string $currency
     * @return Html\Transaction
     */
    public function createTransaction($number, $amount, $currency)
    {
        return new Html\Transaction($number, $amount, $currency);
    }
}
