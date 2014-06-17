<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Interface ShapeInterface
 * @package DesignPatterns\Structural\Adapter
 */
interface ShapeInterface
{
    /**
     * @param int $x
     * @param int $y
     */
    public function draw($x, $y);

    /**
     * @param int $x
     * @param int $y
     */
    public function moveTo($x, $y);
}
