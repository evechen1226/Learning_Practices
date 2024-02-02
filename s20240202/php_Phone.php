<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
//一維陣列
$test = [
    'a' => 'amy',
    'b' => 'bob',
    'c' => 'cat',
];

//二維陣列
$php = [
    [
        'id' => 1,
        'name' => 'iphone 10',
        '價格' => 10000,
        '分店' => '台北',
    ],
    [
        'id' => 2,
        'name' => 'iphone 11',
        '價格' => 20000,
        '分店' => ['台北', '台中'],
    ],
    [
        'id' => 3,
        'name' => 'iphone 12',
        '價格' => 30000,
        '分店' => '高雄',
    ],
    [
        'id' => 41,
        'name' => 'iphone 13',
        '價格' => 40000,
        '分店' => ['台北', '台中', '高雄'],
    ],
];

// 檢查一維陣列
// dd($test);
// 檢查二維陣列
// dd($php);

// 檢查 json
// dd(json_encode($php));

// 傳送資料至前端
echo json_encode($php);