<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test2</title>
</head>

<body>
    <?php
    $str = '人易科技:上 機 測 驗 - 演算法';
    
    // 冒號改成全形
    $str2 = str_replace(':', '：', $str);
    echo $str2;
    echo '<br>';

    // 去除文字間空白，保留-兩側空白
    $array_str = explode(' - ', $str2);
    $str3 = '';
    foreach ($array_str as $value) {
        $str3 .= str_replace(' ', '', $value);
        if ($value == end($array_str))
            break;
        $str3 .= ' - ';
    }
    echo $str3;
    echo '<br>';

    // 印出：到-之間字元
    echo mb_substr($str3, 5, -5, 'utf-8');
    ?>
</body>

</html>