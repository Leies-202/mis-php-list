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
  'text' => "【Misskey_Update_Start!】\nれいすきーのアップデート開始！\n**6分ぐらいの高負荷とその後の再起動に注意！！！**",
  'localOnly' => true,
);
send_to_misskey($message);
