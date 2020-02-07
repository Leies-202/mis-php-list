<?php

function send_to_misskey($message) {
  $webhook_url = 'URL/api/i/update';
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
  "i" => "API_KEY",
  "avatarId" => "ID",
);

send_to_misskey($message);