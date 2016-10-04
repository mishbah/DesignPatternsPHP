<?php

namespace DesignPatterns\Behavioral\NullObject;

class NullLogger implements LoggerInterface
{
    public function log($str)
    {
        // do nothing
    }
}
