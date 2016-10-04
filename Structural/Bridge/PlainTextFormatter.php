<?php

namespace DesignPatterns\Structural\Bridge;

class PlainTextFormatter implements FormatterInterface
{
    public function format($text)
    {
        return $text;
    }
}
