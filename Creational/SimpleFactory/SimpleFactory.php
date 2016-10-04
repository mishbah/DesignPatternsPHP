<?php

namespace DesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
    public function createBicycle()
    {
        return new Bicycle();
    }
}
