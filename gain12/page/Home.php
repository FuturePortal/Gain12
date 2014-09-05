<?php

namespace gain12\page;

class Home extends Page
{
    public function __construct()
    {
        # Menu
        $menu = new \gain12\component\menu\Menu;
        $this->addComponent($menu);

        # Header
        $header = new \gain12\component\headerMedium\HeaderMedium;
        $this->addComponent($header);
    }
}
