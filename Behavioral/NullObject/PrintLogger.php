<?php

namespace DesignPatterns\Behavioral\NullObject;

class PrintLogger implements LoggerInterface
{
    public function log($str)
    {
        echo $str;
    }
}
