#!/bin/bash

echo '========================================================'
echo '  Install Gain12'
echo '========================================================'

cd /vagrant

echo '= Downloading composer ================================='
curl -sS https://getcomposer.org/installer | php

echo '= Removing unwanted folders ============================'
rm -rf html
rm -rf default

echo '= Install sass/scss ===================================='
sudo gem install sass
