<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Class ConcreteImplementor
 * @package DesignPatterns\Structural\Bridge
 */
class ConcreteImplementor implements Implementor
{
    /**
     * @var bool
     */
    private $operated = false;

    /**
     *
     */
    public function operationImpl()
    {
        $this->operated = true;
    }

    /**
     * @return bool
     */
    public function isOperated()
    {
        return $this->operated;
    }
}
