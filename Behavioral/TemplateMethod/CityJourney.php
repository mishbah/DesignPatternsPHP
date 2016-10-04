<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

class CityJourney extends Journey
{
    protected function enjoyVacation()
    {
        return "Eat, drink, take photos and sleep";
    }

    protected function buyGift()
    {
        return "Buy a gift";
    }
}
