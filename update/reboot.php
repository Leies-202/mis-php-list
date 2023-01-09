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
  'text' => "【Misskey_Reboot!】\nMisskey再起動するよ～！\n**切断に注意！！**",
  'localOnly' => true,
);
send_to_misskey($message);
