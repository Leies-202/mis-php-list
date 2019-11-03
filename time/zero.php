<?php

function send_to_misskey($message) {
  $webhook_url = 'https://sample.com/api/notes/create';
  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => 'Content-Type: application/json',
      'content' => json_encode($message),
    )
  );
  return $response === 'ok';
}

$today = date('Y/m/d H:i');

$day = date('z');

if ($day == 0){
  $msk = "***あけおめ！***\n今年";
} else {
  $msk = "今日";
}

if ($day == 0){
  $msn = "年";
} else {
  $msn = "日";
}

$message = array(
  'i' => 'API_KEY',
  'text' =>"【日付が変わったよ！】\n**${today}**\n${msk}も1${msn}頑張ろっ♪",
);

send_to_misskey($message);