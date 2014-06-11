<?php

namespace DesignPatterns\Creational\AbstractFactory\Xml;

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
        return "<transaction number='{$this->number}' amount='{$this->amount}' currency='{$this->currency}' />";
    }
}
