#!/bin/bash

vagrant ssh -c "cd /vagrant; sudo composer self-update; sudo composer install --dev"
