<?php

namespace DesignPatterns\Structural\RemoteProxy;

/**
 * Class Api
 * @package DesignPatterns\Structural\RemoteProxy
 */
class Api
{

    public function getText($id)
    {
        $data = [
            1 => ['text'=>'Remote1'],
            2 => ['text'=>'Remote2']
        ];

        $realSubject = new RealSubject($data[$id]);
        return $realSubject->getText();
    }
}
