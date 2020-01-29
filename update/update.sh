#!/bin/bash

cd /home/misskey/misskey

git pull

php update.php

yarn install
NODE_ENV=production yarn build
rm -rf /tmp/nginx_cache
nginx -s reload
php reboot.php
sleep 10s
systemctl restart misskey