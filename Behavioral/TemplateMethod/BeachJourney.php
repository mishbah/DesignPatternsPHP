<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

class BeachJourney extends Journey
{
    protected function enjoyVacation()
    {
        return "Swimming and sun-bathing";
    }
}
