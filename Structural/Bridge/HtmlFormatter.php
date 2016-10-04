<?php

namespace DesignPatterns\Structural\Bridge;

class HtmlFormatter implements FormatterInterface
{
    public function format($text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}
