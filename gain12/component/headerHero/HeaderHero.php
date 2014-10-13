<?php

namespace gain12\component\HeaderHero;

class HeaderHero extends \gain12\component\Component
{
    // @todo: Abstract all variables to setters to make this component reusable

    public function getContent()
    {
        return $this->render(
            __DIR__ . '/headerHero.phtml',
            [
            ]
        );
    }
}
