<?php

namespace gain12\component\headerMedium;

class HeaderMedium extends \gain12\component\Component
{
    public function getContent()
    {
        return $this->render(
            __DIR__ . '/mediumHeader.phtml',
            [
            ]
        );
    }
}
