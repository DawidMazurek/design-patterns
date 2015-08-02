<?php

namespace DesignPatterns\Operational\Command\Repository;

use DesignPatterns\Operational\Command\Transaction\TransactionEntity;

/**
 * Class TransactionRepository
 * @package DesignPatterns\Operational\Command
 */
class TransactionRepository
{

    /**
     * @param int $transactionId
     * @return TransactionEntity
     */
    public function findTransactionById($transactionId)
    {
        $transactionEntity = new TransactionEntity();
        $transactionEntity->transactionId = $transactionId;
        return $transactionEntity;
    }
}
