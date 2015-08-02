<?php

namespace DesignPatterns\Operational\Command;

use DesignPatterns\Operational\Command\Repository\TransactionRepository;

/**
 * Class FindTransactionById
 * @package DesignPatterns\Operational\Command
 */
class FindTransactionById
{

    /**
     * @var int
     */
    private $transactionId;

    /**
     * @var TransactionRepository
     */
    private $transactionRepository;

    /**
     * @param int $transactionId
     * @param TransactionRepository $transactionRepository
     */
    public function __construct($transactionId, TransactionRepository $transactionRepository)
    {
        $this->transactionId = $transactionId;
        $this->transactionRepository = $transactionRepository;
    }

    /**
     * @return Transaction\TransactionEntity
     */
    public function execute()
    {
        return $this->transactionRepository->findTransactionById($this->transactionId);
    }
}
