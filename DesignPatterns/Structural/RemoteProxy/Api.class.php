<?php

namespace DesignPatterns\Structural\RemoteProxy;

/**
 * Class Api
 * @package DesignPatterns\Structural\RemoteProxy
 */
class Api
{
    /**
     * @param int $subjectId
     * @return string
     */
    public function getText($subjectId)
    {
        $data = [
            1 => ['text'=>'Remote1'],
            2 => ['text'=>'Remote2']
        ];

        $realSubject = new RealSubject($data[$subjectId]);
        return $realSubject->getText();
    }
}
