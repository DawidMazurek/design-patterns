<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Class Abstraction
 * @package DesignPatterns\Structural\Bridge
 */
abstract class Abstraction
{
    /**
     * @param ImplementorInterface $implementor
     */
    public function operation(ImplementorInterface $implementor)
    {
        $implementor->operationImpl();
    }
}
