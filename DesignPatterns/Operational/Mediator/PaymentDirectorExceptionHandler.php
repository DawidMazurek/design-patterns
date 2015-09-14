<?php


namespace DesignPatterns\Operational\Mediator;


class PaymentDirectorExceptionHandler {

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
        $this->transactionRepository = TransactionRepositoryFactory::create();
    }

    public function transactionPaid (callable $action) {
        try {
            $action();
        }
        catch(\Exception $ex) {
            switch(true) {

                case $ex instanceof changeAccountBalanceException:
                    $this->customer->revertLastAction();
                case $ex instanceof StatusChangeException:
                    $this->transactionRepository->revertLastAction();
                    break;
            }

            throw new transactionPaidException;
        }
    }

}