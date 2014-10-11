#!/bin/bash

echo '========================================================'
echo '   Updating Gain12'
echo '========================================================'

cd /vagrant
echo '-> Updating composer'
sudo composer self-update
sudo composer install --dev

echo '--------------------------------------------------------'
echo '-> Updating database'
php gain12/database/update.php

echo '--------------------------------------------------------'
echo '-> Building CSS/JS'
grunt

echo '========================================================'
echo '-> dev.Gain12.com                                       '
echo '                                                        '
echo '                    .:oydNMMMMNdyo:.                    '
echo '                  :hMMMmhso++oshmMMMh:                  '
echo '                .mMMh/`          `+dMMm.                '
echo '               yMMh.    .oNMMd+.    -dMMy               '
echo '              hMM+    -yMMMMMMMNo.    oMMh              '
echo '             oMMo   :dMMNsdMMyhMMMy.   sMMo             '
echo '             mMN   oMMN+` hMMk .sMMM-  `MMm             '
echo '             MMd   `::    hMMk   `/-    mMM             '
echo '             mMN          hMMk         `MMm             '
echo '             oMM+         hMMk         sMM+             '
echo '              hMM/        hMMk        +MMh              '
echo '              `yMMy.      hMMk      .hMMy`              '
echo '                /mMMy/.   hMMk   ./hMMm/                '
echo '                 :hMMMdyomMMyoymMMMh:                   '
echo '                    :oydNMMMMNdyo:`                     '
echo '                                                        '
echo '========================================================'
