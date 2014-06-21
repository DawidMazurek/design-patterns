<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class Leaf
 * @package DesignPatterns\Structural\Composite
 */
class Leaf implements Component
{

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    public $color = 'green';

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $this;
    }
    public function operation()
    {
        $this->color = 'yellow';
    }

    /**
     * @param Component $component
     */
    public function add(Component $component){ }

    /**
     * @param Component $component
     */
    public function remove(Component $component){ }

    /**
     * @param int $number
     * @return Component|false|void
     */
    public function getChild($number=0) { }
}