<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * Class Shape
 * @package DesignPatterns\Structural\Adapter
 */
class Shape implements ShapeInterface
{

    /**
     * @var BasicShape
     */
    private $basicShape;

    /**
     * @param BasicShape $basicShape
     */
    public function __construct(BasicShape $basicShape)
    {
        $this->basicShape = $basicShape;
    }

    /**
     * @param int $posX
     * @param int $posY
     */
    public function draw($posX, $posY)
    {
        $this->basicShape->createObjectAt($posX, $posY);
    }

    /**
     * @param int $posX
     * @param int $posY
     */
    public function moveTo($posX, $posY)
    {
        $this->basicShape->translateX($posX);
        $this->basicShape->translateY($posY);
    }
}
