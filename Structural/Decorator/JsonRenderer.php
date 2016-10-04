<?php

namespace DesignPatterns\Structural\Decorator;

class JsonRenderer extends RendererDecorator
{
    public function renderData()
    {
        return json_encode($this->wrapped->renderData());
    }
}
