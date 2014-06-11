<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * @param string $name
     * @param int $prize
     * @return Renderable
     */
    abstract public function createProduct($name, $prize);

    /**
     * @param int $number
     * @param int $amount
     * @param string $currency
     * @return Renderable
     */
    abstract public function createTransaction($number, $amount, $currency);
}
