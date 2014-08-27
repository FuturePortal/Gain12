<?php

namespace gain12\component\base;

class Base extends \gain12\component\Component
{
    /**
     * @var \gain12\page\Page $page
     */
    protected $page;

    public function setPage(\gain12\page\Page $page)
    {
        $this->page = $page;
    }

    public function getContent()
    {
        return $this->render(
            __DIR__ . '/base.phtml',
            [
                'title' => $this->page->getTitle(),
                'content' => $this->page->getContent(),
                'siteUrl' => 'http://' . $_SERVER['SERVER_NAME'] . '/'
            ]
        );
    }

}
