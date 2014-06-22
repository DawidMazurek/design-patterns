<?php

namespace DesignPatterns\Structural\RemoteProxy;

/**
 * Class TweetProxy
 * @package DesignPatterns\Structural\RemoteProxy
 */
class SubjectProxy extends RealSubject
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * @var int
     */
    protected $id;

    /**
     * @param Api $api
     * @param int $id
     */
    public function __construct(Api $api, $id) {
        $this->api = $api;
        $this->id  = $id;
    }

    public function getText() {
        return $this->api->getText($this->id);
    }
}
