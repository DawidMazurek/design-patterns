<?php

namespace DesignPatterns\Structural\Composite;

/**
 * Interface Component
 * @package DesignPatterns\Structural\Composite
 */
interface Component {

    /**
     * @return mixed
     */
    public function operation();

    /**
     * @param Component $component
     *
     */
    public function add(Component $component);

    /**
     * @param Component $component
     *
     */
    public function remove(Component $component);

    /**
     * @param int $number
     * @return Component|false
     */
    public function getChild($number=0);
}
