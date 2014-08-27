<?php

namespace gain12\component\menu;

class Menu extends \gain12\component\Component
{
    public function getContent()
    {
        return $this->render(
            __DIR__ . '/menu.phtml',
            [
            ]
        );
    }
}
