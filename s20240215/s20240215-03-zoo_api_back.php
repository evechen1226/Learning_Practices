<?php
header('Access-Control-Allow-Origin:*'); //任何網址都可以使用
// header('Content-Type:application/json'); //用於宣告遞送給對方的文件型態，可不加。
$data=[
    's1'=>'amy',
    's2'=>'bob',
    's3'=>'cat',
];

echo json_encode($data);