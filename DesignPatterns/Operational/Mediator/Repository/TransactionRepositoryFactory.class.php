<?php


namespace DesignPatterns\Operational\Mediator\Repository;


class TransactionRepositoryFactory {

    static function create()
    {
        return new TransactionRepository();
    }
}
