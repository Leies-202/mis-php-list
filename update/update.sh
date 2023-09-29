#!/bin/bash
echo -n "マージちゃんとやった？ [Y/n]: "
read ANS

case $ANS in
  "" | [Yy]* )

echo "アップデートSTART!!"
cd /home/misskey/misskey

rm -r -f /home/misskey/misskey/package.json
rm -r -f /home/misskey/misskey/pnpm-lock.yaml

git pull

php update.php

NODE_ENV=production pnpm i
NODE_ENV=production pnpm build
rm -rf /tmp/nginx_cache
nginx -s reload
php reboot.php
sleep 10s
systemctl restart misskey
    ;;
  * )
    # ここに「No」の時の処理を書く
    echo "んじゃマージしてもろて"
    ;;
esac
