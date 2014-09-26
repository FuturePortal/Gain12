<?php

$menu = new \gain12\component\menu\Menu;

$menu->setLogo('./images/logo/logo-full-white.svg', 'Gain12');

$menu->addLink('Homepage', './');
$menu->addLink('About', './#/about');
$menu->addLink('Newsletter', './#/newsletter');


$menu->addDirectLink('About', './#/about');
$menu->addDirectLink('Newsletter', './#/newsletter');

$menu->setCredits(
    'FuturePortal <i class="fa fa-copyright"></i> ' . date('Y'),
    'https://github.com/FuturePortal'
);

$menu->addIconLink('<i class="fa fa-github"></i>', 'https://github.com/FuturePortal/Gain12');
$menu->addIconLink('<i class="fa fa-facebook-square"></i>', 'https://www.facebook.com/pages/Gain12/689114521163440');
$menu->addIconLink('<i class="fa fa-twitter"></i>', 'https://twitter.com/Gain12app');

return $menu;
