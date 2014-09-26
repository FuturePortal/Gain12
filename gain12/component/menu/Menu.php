<?php

namespace gain12\component\menu;

class Menu extends \gain12\component\Component
{
    protected $mainLinks = [];
    protected $topLinks = [];
    protected $iconLinks = [];
    protected $directLinks = [];
    protected $credits = [];
    protected $logo = [];

    public function setLogo($imageUrl, $altText = '')
    {
        $this->logo = [
            'url' => $imageUrl,
            'alt' => $altText
        ];
        return $this;
    }

    public function addLink($title, $url, $type = 'main')
    {
        $link = [
            'title' => $title,
            'url' => $url,
        ];
        switch ($type) {
            case 'main':
                $this->mainLinks[] = $link;
                break;
            case 'direct':
                $this->directLinks[] = $link;
                break;
            case 'top':
                $this->topLinks[] = $link;
                break;
            case 'icon':
                $this->iconLinks[] = $link;
                break;
            default:
                throw new \Exception('"' . $type . '" is not a valid link type.');
        }
        return $this;
    }

    public function addDirectLink($title, $url)
    {
        $this->addLink($title, $url, 'direct');
        return $this;
    }

    public function addTopLink($title, $url)
    {
        $this->addLink($title, $url, 'top');
        return $this;
    }

    public function addIconLink($icon, $url)
    {
        $this->addLink($icon, $url, 'icon');
        return $this;
    }

    public function setCredits($credits, $url)
    {
        $this->credits = [
            'credit' => $credits,
            'url' => $url
        ];
        return $this;
    }

    public function getContent()
    {
        return $this->render(
            __DIR__ . '/menu.phtml',
            [
                'topLinks' => $this->topLinks,
                'mainLinks' => $this->mainLinks,
                'directLinks' => $this->directLinks,
                'iconLinks' => $this->iconLinks,
                'credits' => $this->credits,
                'logo' => $this->logo,
            ]
        );
    }
}
