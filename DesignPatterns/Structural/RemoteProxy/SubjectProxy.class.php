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
    protected $subjectId;

    /**
     * @param Api $api
     * @param int $subjectId
     */
    public function __construct(Api $api, $subjectId) {
        $this->api = $api;
        $this->$subjectId = $subjectId;
    }

    /**
     * @return string
     */
    public function getText() {
        return $this->api->getText($this->$subjectId);
    }
}
