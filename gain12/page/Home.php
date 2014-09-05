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

        # Add test content
        $crap = '';
        for ($i = 0; $i <= 100; $i++) {
            switch (rand(1, 5)) {
                case 1:
                    $crap .= 'lol '; break;
                case 2:
                    $crap .= 'jizzle ';
                    break;
                case 3:
                    $crap .= 'autobandventiel ';
                    break;
                case 4:
                    $crap .= 'super '; break;
                case 5: $crap .= 'powers '; break;
            }
            $crap .= '<br />';
        }
        $this->addComponent($crap);
    }
}
