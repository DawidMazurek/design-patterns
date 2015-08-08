<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Class Composite
 * @package DesignPatterns\Structural\Composite
 */
class Composite implements ComponentInterface
{

    /**
     * @var ComponentInterface[]
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
     * @param ComponentInterface $component
     */
    public function add(ComponentInterface $component)
    {
        $this->components [] = $component;
    }

    /**
     * @param ComponentInterface $component
     */
    public function remove(ComponentInterface $component)
    {
        foreach ($this->components as $key => $comp) {
            if ($component === $comp) {
                unset($this->components[$key]);
            }
        }
    }

    /**
     * @param int $number
     * @return ComponentInterface|false
     */
    public function getChild($number = 0)
    {
        if (!isset($this->components[$number])) {
            return false;
        }
        return $this->components[$number];
    }
}
