#!/bin/bash

echo '========================================================'
echo 'Updating Gain12'
echo '========================================================'

cd /vagrant

echo 'Making sure the config file is ready to rumble'
yes n | cp -i gain12/config/config.php.pub gain12/config/config.php

echo 'Updating composer'
php composer.phar self-update
php composer.phar install --dev

echo 'Updating database'
php gain12/database/update.php
