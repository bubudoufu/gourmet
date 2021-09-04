<?php
// javascriptから送られてきたクエリを変数に代入
$latitude =  $_POST['latitude']; 
$longitude = $_POST['longitude'];
$range = $_POST['range'];
$start = $_POST['start'];
// クエリをまとめる
$query = [
    'key' => 'APIキー', // <-- ここにあなたのAPIキーを設定してください。
    'lat' => $latitude, // 緯度
    'lng' => $longitude, // 経度
    'range' => $range, // 検索範囲
    'start' => $start, // 検索の開始位置
    'format' => 'json', // レスポンス形式
];
// グルメサーチAPIからjsonを取得
$url = 'https://webservice.recruit.co.jp/hotpepper/gourmet/v1/?';
$url .= http_build_query($query);
$response = file_get_contents($url);
$json = json_encode($response);

echo ($json);
