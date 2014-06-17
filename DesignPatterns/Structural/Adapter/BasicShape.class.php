<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Class BasicShape
 * @package DesignPatterns\Structural\Adapter
 */
abstract class BasicShape
{

    /**
     * @var int
     */
    protected $x;

    /**
     * @var int
     */
    protected $y;

    /**
     * @param int $x
     * @param int $y
     */
    public function createObjectAt($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param int $x
     */
    public function translateX($x)
    {
        $this->x += $x;
    }

    /**
     * @param int $y
     */
    public function translateY($y)
    {
        $this->y += $y;
    }
}
