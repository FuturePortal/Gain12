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
echo '             mMN   oMMN+` hMM+ .sMMM-  `MMm             '
echo '             MMd   `::    hMM+   `/-    mMM             '
echo '             mMN          hMM+         `MMm             '
echo '             oMM+         hMM+         sMM+             '
echo '              hMM/        hMM+        +MMh              '
echo '              `yMMy.      hMM+      .hMMy`              '
echo '                /mMMy/.   hMM+   ./hMMm/                '
echo '                 :hMMMdyomMMyoymMMMh:                   '
echo '                   `:oydNMMMMNdyo:`                     '
echo '                                                        '
echo '========================================================'
