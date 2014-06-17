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
    protected $posX;

    /**
     * @var int
     */
    protected $posY;

    /**
     * @param int $posX
     * @param int $posY
     */
    public function createObjectAt($posX, $posY)
    {
        $this->posX = $posX;
        $this->posY = $posY;
    }

    /**
     * @param int $posX
     */
    public function translateX($posX)
    {
        $this->posX += $posX;
    }

    /**
     * @param int $posY
     */
    public function translateY($posY)
    {
        $this->posY += $posY;
    }
}
