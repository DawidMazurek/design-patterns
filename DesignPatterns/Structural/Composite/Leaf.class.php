<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class Leaf
 * @package DesignPatterns\Structural\Composite
 */
class Leaf implements ComponentInterface
{

    /**
     * @var string
     */
    public $color = 'green';

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     *
     */
    public function operation()
    {
        $this->color = 'yellow';
    }

    /**
     * @param ComponentInterface $component
     */
    public function add(ComponentInterface $component)
    {
    }

    /**
     * @param ComponentInterface $component
     */
    public function remove(ComponentInterface $component)
    {
    }

    /**
     * @param int $number
     * @return ComponentInterface|false|void
     */
    public function getChild($number = 0)
    {
    }
}
