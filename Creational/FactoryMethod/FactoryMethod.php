<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle($type);

    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}
