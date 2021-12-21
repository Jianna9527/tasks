<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test4</title>
</head>

<body>
    <?php
    $numbers = array(77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9);

    // 正序排列
    for ($i = 0; $i < sizeof($numbers); $i++) {
        $min = $numbers[$i];
        $min_index = $i;
        for ($j = $i + 1; $j < sizeof($numbers); $j++) {
            if ($min > $numbers[$j]) {
                $min = $numbers[$j];
                $min_index = $j;
            }
        }
        if ($min_index != $i) {
            $temp = $numbers[$i];
            $numbers[$i] = $min;
            $numbers[$min_index] = $temp;
        }
    }
    print_r($numbers);
    ?>
</body>

</html>