<?php

namespace gain12\component\HeaderHero;

class HeaderHero extends \gain12\component\Component
{
    public function getContent()
    {
        return $this->render(
            __DIR__ . '/headerHero.phtml',
            [
            ]
        );
    }
}
