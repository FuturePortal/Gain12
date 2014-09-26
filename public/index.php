<?php

// Record runtime
$startTime = strtotime('now') + microtime();

// Set document root
chdir(dirname(__DIR__));

// Setup the database connection
require 'vendor/autoload.php';
require 'gain12/config/config.php';
require 'gain12/core/init.php';

// Set page globals
global $page;

// Load the wanted page
switch (empty($_GET['page']) ? 'home' : $_GET['page']) {
    case 'home':
        $page = new gain12\page\Home;
        break;
    default:
        $page = new gain12\page\NotFound;
        break;
}

// Process all page specifics
$base = new gain12\base\Base;
$base->setPage($page);
echo $base;

// Show generation time @todo: this should not be in paragraph.
echo '
    <br /><br /><p>Page generated in ' . number_format((((strtotime('now') + microtime()) - $startTime) * 1000), 0, '.', ',') . 'ms</p>
</body>
</html>';
