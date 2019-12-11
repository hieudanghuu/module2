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
    function seachMin($num)
    {
        $count = 0;
        $min = $num[0];
        for ($i = 0; $i < count($num); $i++) {
            if ($num[$i] < $min) {
                $min = $num[$i];
                $count+=$i;
            }
        }return "min:$min  <br>  vị trí index :$count";
    }
    $arr = [3,7,4,2,7,9,5,4,3];
    echo seachMin($arr);
    ?>

</body>

</html>