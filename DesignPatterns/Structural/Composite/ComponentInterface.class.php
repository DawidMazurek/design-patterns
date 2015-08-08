<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Interface Component
 * @package DesignPatterns\Structural\Composite
 */
interface ComponentInterface
{

    /**
     *
     */
    public function operation();

    /**
     * @param ComponentInterface $component
     *
     */
    public function add(ComponentInterface $component);

    /**
     * @param ComponentInterface $component
     *
     */
    public function remove(ComponentInterface $component);

    /**
     * @param int $number
     * @return ComponentInterface|false
     */
    public function getChild($number = 0);
}
