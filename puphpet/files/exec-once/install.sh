#!/bin/bash

echo '========================================================'
echo '   Install Gain12'
echo '========================================================'

cd /vagrant

echo '-> copy config.php.pub if not yet set'
yes n | cp -i gain12/config/config.php.pub gain12/config/config.php

echo '--------------------------------------------------------'
echo '-> Removing unwanted folders'
rm -rf html
rm -rf default

echo '========================================================'
