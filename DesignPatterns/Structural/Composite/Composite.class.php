<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class Composite
 * @package DesignPatterns\Structural\Composite
 */
class Composite implements Component
{

    /**
     * @var Component[]
     */
    private $components = [];

    /**
     *
     */
    public function operation()
    {
        foreach ($this->components as $component) {
            $component->operation();
        }
    }

    /**
     * @param Component $component
     */
    public function add(Component $component)
    {
        $this->components [] = $component;
    }

    /**
     * @param Component $component
     */
    public function remove(Component $component)
    {
        foreach ($this->components as $key => $comp) {
            if ($component === $comp) {
                unset($this->components[$key]);
            }
        }
    }

    /**
     * @param int $number
     * @return Component|false
     */
    public function getChild($number = 0)
    {
        if (!isset($this->components[$number])) {
            return false;
        }
        return $this->components[$number];
    }
}
