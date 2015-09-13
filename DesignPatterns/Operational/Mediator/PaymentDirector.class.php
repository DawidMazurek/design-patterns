<?php


namespace DesignPatterns\Operational\Mediator;


use DesignPatterns\Operational\Mediator\Repository\TransactionRepository;
use DesignPatterns\Operational\Mediator\Repository\TransactionRepositoryFactory;

class PaymentDirector implements DirectorInterface
{

    /**
     * @var Transaction
     */
    protected $transaction;

    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @var TransactionRepository
     */
    protected $transactionRepository;

    /**
     * @param Transaction $transaction
     * @param Customer $customer
     */
    public function __construct(Transaction $transaction, Customer $customer)
    {
        $this->transaction = $transaction;
        $this->customer = $customer;
        $this->transactionRepository = TransactionRepositoryFactory::create();
    }

    /**
     * @param Transaction $transaction
     */
    public function transactionPaid(Transaction $transaction)
    {
        $this->transactionRepository->changeTransactionStatus($transaction->id, $transaction->status);
    }
}
