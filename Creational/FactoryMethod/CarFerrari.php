<?php

namespace DesignPatterns\Creational\FactoryMethod;

class CarFerrari implements VehicleInterface
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
