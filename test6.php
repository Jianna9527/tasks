<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test6</title>
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    $nums = [2, 7, 11, 15];
    $target = 9;

    function twoSum($nums, $target)
    {
        $result = [];
        for ($i = 0; $i < sizeof($nums); $i++) {
            for ($j = $i + 1; $j < sizeof($nums); $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    array_push($result, $i, $j);
                    return $result;
                }
            }
        }
        return [];
    }

    print_r(twoSum($nums, $target));
    ?>
</body>

</html>