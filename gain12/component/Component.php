<?php

namespace gain12\component;

use gain12\library\Renderer;

abstract class Component extends Renderer
{
    /**
     * Init new component
     *
     * @param Page $page
     * @param array $config
     */
    public function __construct($config = [])
    {
    }

    /**
     * Results the content html
     *
     * @return string content
     */
    abstract public function getContent();

    /**
     * Get the components content
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getContent();
    }
}
