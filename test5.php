<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test5</title>
</head>

<body>
    <?php
    $array_a = array(77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9);
    $array_b = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

    // 清除重複數據
    function clear_array($array_name)
    {
        for ($i = 0; $i < sizeof($array_name); $i++) {
            for ($j = $i + 1; $j < sizeof($array_name); $j++) {
                if ($array_name[$i] == $array_name[$j]) {
                    unset($array_name[$j]);
                    $array_name = array_values($array_name);
                }
            }
        }
        return $array_name;
    }

    // 交集
    function intersect($array_a, $array_b)
    {
        $array_result = [];

        foreach ($array_a as $value_a) {
            foreach ($array_b as $value_b) {
                if ($value_a == $value_b) {
                    array_push($array_result, $value_a);
                }
            }
        }
        return clear_array($array_result);
    }

    // 差集
    function diff($array_a, $array_b)
    {
        $array_result = [];

        foreach ($array_a as $value_a) {
            $is_existed = false;
            foreach ($array_b as $value_b) {
                if ($value_a == $value_b) {
                    $is_existed = true;
                    break;
                }
            }
            if ($is_existed == false) {
                array_push($array_result, $value_a);
            }
        }
        return clear_array($array_result);
    }

    // 聯集
    function union($array_a, $array_b)
    {
        $intersect_array_ab = intersect($array_a, $array_b);
        $diff_array_ab = diff($array_a, $array_b);
        $diff_array_ba = diff($array_b, $array_a);

        foreach ($diff_array_ab as $value) {
            array_push($intersect_array_ab, $value);
        }
        foreach ($diff_array_ba as $value) {
            array_push($intersect_array_ab, $value);
        }

        return clear_array($intersect_array_ab);
    }

    echo 'a交集b<br>';
    print_r(intersect($array_a, $array_b));
    echo '<br>';

    echo 'a差集b<br>';
    print_r(diff($array_a, $array_b));
    echo '<br>';

    echo 'a聯集b<br>';
    print_r(union($array_a, $array_b));
    ?>
</body>

</html>