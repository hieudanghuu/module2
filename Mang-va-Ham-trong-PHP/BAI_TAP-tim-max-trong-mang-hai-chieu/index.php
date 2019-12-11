<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    function seachMax($num)
    {
        $count = 0;
        $count1 = 0;
        $max = $num[0][0];
        for ($i = 0; $i < count($num); $i++) {          
            for ($j = 0; $j < count($num[$i]); $j++) {
                if ($num[$i][$j] > $max) {
                    $max = $num[$i][$j];
                    $count = $i;
                    $count1 = $j;
                }
            }
        }
        return  " max : $max  <br> chỉ số index: num[$count][$count1]";
    }
    $arr = [
        [1, 3, 4, 3, 6, 7, 5],
        [4, 5, 3, 5, 6, 12, 1],
        [4, 5, 3, 2, 5, 33, 5]
    ];
    echo seachMax($arr);
    ?>
</body>

</html>