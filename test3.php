<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test3</title>
</head>

<body>
    <?php
    $numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

    // 奇數總和減偶數總和
    $even = 0;
    $odd = 0;
    foreach ($numbers as $value) {
        if ($value % 2 == 0) {
            $even += $value;
        } else {
            $odd += $value;
        }
    }
    echo $odd - $even;
    ?>
</body>

</html>