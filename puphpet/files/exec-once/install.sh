#!/bin/bash

echo '========================================================'
echo 'Install Gain12'
echo '========================================================'

cd /vagrant

echo 'Downloading composer'
curl -sS https://getcomposer.org/installer | php

echo 'Removing unwanted folders'
rm -rf html
rm -rf default

echo 'Install npm and grunt on the server'
sudo apt-get install npm
sudo npm install -g grunt-cli
npm install
