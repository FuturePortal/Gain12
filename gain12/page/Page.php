<?php

namespace gain12\page;

class Page
{
    protected $title = '';
    protected $description = '';

    protected $components = [];

    public function getTitle()
    {
        return (empty($this->title))? 'Gain12' : $this->title . ' | Gain12';
    }

    public function getFixedTitle()
    {
        return (strlen($this->title) > 25) ? substr($this->title, 0, 22) . '...' : $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    protected function addComponent($component)
    {
        $this->components[] = $component;
        return $this;
    }

    /**
     * Build the page using components by default
     *
     * @return string content
     */
    public function getContent()
    {
        $content = '';

        foreach ($this->components as $component) {
            $content .= $component;
        }

        return $content;
    }

    public function __toString()
    {
        return $this->getContent();
    }
}
