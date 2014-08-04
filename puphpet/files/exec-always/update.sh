#!/bin/bash

echo '========================================================'
echo 'Updating Gain12'
echo '========================================================'

cd /vagrant

echo 'Updating composer'
php composer.phar self-update
php composer.phar install --dev

echo 'Updating database'
php gain12/database/update.php
