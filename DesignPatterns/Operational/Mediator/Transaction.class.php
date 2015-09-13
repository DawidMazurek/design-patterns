<?php


namespace DesignPatterns\Operational\Mediator;


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
