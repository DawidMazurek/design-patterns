<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class ItalicDecorator
 * @package DesignPatterns\Structural\Decorator
 */
class ItalicDecorator
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
        return "<i>{$this->string}</i>";
    }
}
