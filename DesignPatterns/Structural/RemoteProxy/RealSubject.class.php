<?php

namespace DesignPatterns\Structural\RemoteProxy;

/**
 * Class RealSubject
 * @package DesignPatterns\Structural\RemoteProxy
 */
class RealSubject {

    /**
     * @var array
     */
    protected $data;

    /**
     * @param array $data
     */
    public function __construct(array $data) {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getText() {
        return $this->data['text'];
    }
}
