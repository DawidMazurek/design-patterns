<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Renderable;

class Transaction implements Renderable
{

    private $number;
    private $amount;
    private $currency;

    public function __construct($number, $amount, $currency)
    {
        $this->number= $number;
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function render()
    {
        return "<div><p>Transaction number: {$this->number}</p><p>Amount: {$this->amount}</p><p>Currency: {$this->currency}</p></div>";
    }
}
