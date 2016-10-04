<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}
