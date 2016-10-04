<?php

namespace DesignPatterns\Structural\Composite;

class TextElement implements RenderableInterface
{
    /**
     * @var string
     */
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return $this->text;
    }
}
