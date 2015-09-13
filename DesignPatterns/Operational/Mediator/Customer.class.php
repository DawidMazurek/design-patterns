<?php


namespace DesignPatterns\Operational\Mediator;


class Customer {

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
     * @param $amount
     */
    public function changeAccountBalance($amount)
    {

    }
}