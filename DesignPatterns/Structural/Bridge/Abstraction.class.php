<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Class Abstraction
 * @package DesignPatterns\Structural\Bridge
 */
abstract class Abstraction
{
    /**
     * @param Implementor $implementor
     */
    public function operation(Implementor $implementor)
    {
        $implementor->operationImpl();
    }
}
