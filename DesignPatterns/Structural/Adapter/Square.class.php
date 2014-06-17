<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Class Square
 * @package DesignPatterns\Structural\Adapter
 */
class Square extends BasicShape
{
    /**
     * @var string
     */
    private $color;

    /**
     * @param string $color
     */
    public function fill($color)
    {
        $this->color = $color;
    }

    /**
     * @return array
     */
    public function getCoords()
    {
        return ['x' => $this->x, 'y' => $this->y];
    }
}
