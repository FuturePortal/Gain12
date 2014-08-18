<?php

namespace gain12\page;

class Home extends Page
{
    public function __construct()
    {
        # Test this setup
        $this->addComponent('<h1>Homepage</h1>');
    }
}
