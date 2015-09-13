<?php


namespace DesignPatterns\Operational\Mediator;


interface DirectorInterface
{
    public function transactionPaid(Transaction $transaction);
}
