<?php
// javascriptから送られてきたクエリを変数に代入
$latitude =  $_POST['latitude']; 
$longitude = $_POST['longitude'];
$range = $_POST['range'];
$start = $_POST['start'];
// クエリをまとめる
$query = [
    'key' => 'アプリケーションID',// <-- ここにあなたのアプリケーションIDを設定してください。
    'lat' => $latitude,
    'lng' => $longitude,
    'range' => $range,
    'start' => $start,
    'format' => 'json',
];
// グルメサーチAPIからjsonを取得
$url = 'https://webservice.recruit.co.jp/hotpepper/gourmet/v1/?';
$url .= http_build_query($query);
$response = file_get_contents($url);
$json = json_encode($response);

echo ($json);
