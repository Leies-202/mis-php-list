#!/bin/bash
echo -n "マージちゃんとやった？ [Y/n]: "
read ANS

case $ANS in
  "" | [Yy]* )

echo "アップデートSTART!!"
cd /home/misskey/misskey

git pull

php update.php

NODE_ENV=production yarn install --force
NODE_ENV=production yarn build
rm -rf /tmp/nginx_cache
nginx -s reload
php reboot.php
sleep 10s
systemctl restart misskey
    ;;
  * )
    echo "んじゃマージしてもろて"
    ;;
esac
