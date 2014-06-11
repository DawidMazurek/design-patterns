<?php

namespace DesignPatterns\Creational\AbstractFactory\Xml;

use DesignPatterns\Creational\AbstractFactory\Renderable;

/**
 * Class Transaction
 * @package DesignPatterns\Creational\AbstractFactory\Xml
 */
class Transaction implements Renderable
{
    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @param int $number
     * @param int $amount
     * @param string $currency
     */
    public function __construct($number, $amount, $currency)
    {
        $this->number= $number;
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function render()
    {
        return "<transaction number='{$this->number}' amount='{$this->amount}' currency='{$this->currency}' />";
    }
}
