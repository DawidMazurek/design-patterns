<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Renderable;

/**
 * Class Transaction
 * @package DesignPatterns\Creational\AbstractFactory\Html
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
        $this->number = $number;
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function render()
    {
        return "<div><p>Transaction number: {$this->number}</p>"
        . "<p>Amount: {$this->amount}</p><p>Currency: {$this->currency}</p></div>";
    }
}
