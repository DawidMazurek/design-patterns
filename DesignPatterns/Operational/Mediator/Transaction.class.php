<?php


namespace DesignPatterns\Operational\Mediator;


use DesignPatterns\Operational\Mediator\ValueObject\Float;

class Transaction {

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $status;

    /**
     * @var Float
     */
    public $amount;

    /**
     * @var DirectorInterface
     */
    protected $director;

    /**
     * @param DirectorInterface $director
     */
    public function __construct(DirectorInterface $director)
    {
        $this->director = $director;
    }

    /**
     *
     */
    public function paid()
    {
        $this->director->transactionPaid($this);
    }
}
