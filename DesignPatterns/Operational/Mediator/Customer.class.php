<?php


namespace DesignPatterns\Operational\Mediator;


use DesignPatterns\Operational\Mediator\ValueObject\Float as FloatValueObject;

class Customer {

    /**
     * @var DirectorInterface
     */
    protected $director;

    /**
     * @var float
     */
    public $balance;

    /**
     * @param DirectorInterface $director
     */
    public function __construct(DirectorInterface $director)
    {
        $this->director = $director;
    }

    /**
     * @param FloatValueObject $amount
     */
    public function changeAccountBalance(FloatValueObject $amount)
    {
        $this->balance += $amount->getValue();
    }
}
