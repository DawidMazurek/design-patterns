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
     * @param int $x
     * @param int $y
     */
    public function draw($x, $y)
    {
        $this->basicShape->createObjectAt($x, $y);
    }

    /**
     * @param int $x
     * @param int $y
     */
    public function moveTo($x, $y)
    {
        $this->basicShape->translateX($x);
        $this->basicShape->translateY($y);
    }
}
