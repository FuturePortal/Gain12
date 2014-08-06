<?php

// Set document root
chdir(dirname(__DIR__));

// Setup the database connection
require 'vendor/autoload.php';
require 'gain12/config/config.php';
require 'gain12/core/init.php';

// Load the wanted page
switch (empty($_GET['page']) ? 'home' : $_GET['page']) {
    case 'home':
        echo 'Homepage!';
        break;
    default:
        echo 'Oh noes, 404!';
        break;
}
