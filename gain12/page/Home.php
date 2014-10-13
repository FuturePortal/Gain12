<?php

namespace gain12\page;

class Home extends Page
{
    public function __construct()
    {
        # Menu
        $this->addCoreComponent('menu');

        # Header
        $header = new \gain12\component\headerHero\HeaderHero;
        $this->addComponent($header);
    }
}
