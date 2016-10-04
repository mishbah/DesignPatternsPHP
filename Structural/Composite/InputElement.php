<?php

namespace DesignPatterns\Structural\Composite;

class InputElement implements RenderableInterface
{
    public function render()
    {
        return '<input type="text" />';
    }
}
