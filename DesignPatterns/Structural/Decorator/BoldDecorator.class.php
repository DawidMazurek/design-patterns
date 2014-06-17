<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class BoldDecorator
 * @package DesignPatterns\Structural\Decorator
 */
class BoldDecorator
{

    /**
     * @var string
     */
    private $string;

    /**
     * @param string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "<b>{$this->string}</b>";
    }
}
