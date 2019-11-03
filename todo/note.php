<?php

$txt = file_get_contents("memo.txt");

function send_to_misskey($message) {
  $webhook_url = 'https://exsample.com/api/notes/create';
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
  'text' => "【現在のマスターのTodoだよっ!】\n$txt",
  'localOnly' => true,
);

send_to_misskey($message);