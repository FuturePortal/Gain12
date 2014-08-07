#!/bin/bash

echo '========================================================'
echo '   Updating Gain12'
echo '========================================================'

cd /vagrant

echo '-> copy config.php.pub if not yet set'
yes n | cp -i gain12/config/config.php.pub gain12/config/config.php

echo '--------------------------------------------------------'
echo '-> Updating composer'
php composer.phar self-update
php composer.phar install --dev

echo '--------------------------------------------------------'
echo '-> Updating database'
php gain12/database/update.php

echo '--------------------------------------------------------'
echo '-> Building CSS/JS'
grunt

echo '========================================================'
echo '-> Gain12'
echo '                    `.-::://:::-.`'
echo '                 `-/++/:------:/++/-`'
echo '               .:+/:.`          `.:++:`'
echo '              :++-`      `--`      `:++-'
echo '             :+/.      `:++++:`      ./+:'
echo '            -++.     `:++/++/++:`     .++-'
echo '            /+:      -:-`.++.`::.      /+/'
echo '           `++-          .++.          :++'
echo '            /+:          .++.          /+/'
echo '            -++.         .++.         .++-'
echo '             :+/.        .++.        ./+:'
echo '              :++:`      .++.      `:++-'
echo '               .:+/:.`   .++.   `.:++:`'
echo '                 `-/++/:-:++:::/++/-`'
echo '                    `.-::://::--.`'
echo ' '
echo '========================================================'
