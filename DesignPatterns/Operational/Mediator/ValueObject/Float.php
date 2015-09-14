<?php

namespace DesignPatterns\Operational\Mediator\ValueObject;

use InvalidArgumentException;

class Float {

    /**
     * @var float
     */
    private $value;

    /**
     * @param float $floatValue
     * @throws InvalidArgumentException
     */
    public function __construct($floatValue)
    {
        if(!filter_var($floatValue, FILTER_VALIDATE_FLOAT)) {
            throw new InvalidArgumentException;
        }
        $this->value = $floatValue;
    }

    /**
     * @return float
     */
    public function getValue() {
        return $this->value;
    }

}