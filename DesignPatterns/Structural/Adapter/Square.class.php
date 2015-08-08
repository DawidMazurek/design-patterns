<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Class Square
 * @package DesignPatterns\Structural\Adapter
 */
class Square extends BasicShape
{

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
        return ['posX' => $this->posX, 'posY' => $this->posY];
    }
}
