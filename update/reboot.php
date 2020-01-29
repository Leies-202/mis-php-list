<?php

function send_to_misskey($message) {
  $webhook_url = 'http://MisskeyURL/api/notes/create';
  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => 'Content-Type: application/json',
      'content' => json_encode($message),
    )
  );
  $response = file_get_contents($webhook_url, false, stream_context_create($options));
  return $response === 'ok';
}
$message = array(
  'i' => 'API_KEY',
  'text' => "【Misskey_Reboot!】\n**Misskey再起動するよ～！！！**\nバーション変更投稿か、\nこの投稿から５分経ったら再起動したと判断して！",
  'localOnly' => true,
);
send_to_misskey($message);