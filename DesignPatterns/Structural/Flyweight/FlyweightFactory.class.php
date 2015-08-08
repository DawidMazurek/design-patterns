<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * Class FlyweightFactory
 * @package DesignPatterns\Structural\Flyweight
 */
class FlyweightFactory
{

    const TYPE_A = 1;
    const TYPE_B = 2;

    /**
     * @var FlyweightInterface[]
     */
    private $flyweights = [];

    /**
     * @param int $type
     * @param string $key
     * @return FlyweightInterface
     */
    public function getFlyweight($type, $key)
    {
        $hash = sha1($key);
        if (!array_key_exists($hash, $this->flyweights)) {
            $this->flyweights[$hash] = $this->createFlyweight($type);
        }

        return $this->flyweights[$hash];
    }

    /**
     * @param int $type
     * @return ConcreteFlyweightA
     * @throws IncorrectFlyweightType
     */
    private function createFlyweight($type)
    {
        switch($type)
        {
            case self::TYPE_A:
                return new ConcreteFlyweightA();
                break;
            case self::TYPE_B:
                return new ConcreteFlyweightA();
                break;
            default:
                throw new IncorrectFlyweightType('Incorrect type!');
        }
    }
}
