<?php

date_default_timezone_set ('Asia/Tokyo');

function send_to_misskey($message) {
  $webhook_url = 'https://sample.com/api/notes/create';
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

$date = new DateTime();
$today = $date->format('H');

$zi = date("H");

if ( $zi == 07 ){
 $mes = 'おはよう！朝ごはんの時間だよっ！';
}elseif( $zi == 12 ){
 $mes = 'お昼ごはんの時間っ！';
}elseif( $zi == 15){
 $mes = 'おやつの時間だ～～！！！';
}elseif( $zi == 19){
 $mes = '夜ご飯の時間だよっ！';
}else{
 $mes = null;
}

$message = array(
  'i' => 'API_KEY',
  'text' => "【時報！】\n${zi}時だよっ！\n$mes",
);

send_to_misskey($message);