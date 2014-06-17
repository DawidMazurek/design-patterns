<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Interface ShapeInterface
 * @package DesignPatterns\Structural\Adapter
 */
interface ShapeInterface
{
    /**
     * @param int $posX
     * @param int $posY
     */
    public function draw($posX, $posY);

    /**
     * @param int $posX
     * @param int $posY
     */
    public function moveTo($posX, $posY);
}
