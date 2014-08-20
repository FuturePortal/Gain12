<?php

namespace gain12\page;

class NotFound extends Page
{
    public function __construct()
    {
        # Test this setup
        $this->addComponent('<h1>404</h1>');
    }
}
