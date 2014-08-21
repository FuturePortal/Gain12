#!/bin/bash

vagrant ssh -c "cd /vagrant; phpcs -n --standard=PSR2 --extensions=php --ignore=vendor/* *"
