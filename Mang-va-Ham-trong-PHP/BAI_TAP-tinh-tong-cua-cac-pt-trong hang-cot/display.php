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
    function ranArray($len1)
    {
        $arr = [];
        for ($i = 0; $i < $len1; $i++) {
            $temp = [];
            for ($j = 0; $j < $len1; $j++) {
                array_push($temp,  mt_rand(10, 99));
            }
            array_push($arr, $temp);
        }
        return $arr;
    }
    function sumArr($arr,$num){
        $sum = 0;
        for ($i = 0 ; $i < count($arr) ; $i ++ ){
               $sum += $arr[$i][$num];
        }return $sum;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = (int) $_POST["num"];
        $height = (int)$_POST["num1"];

        $arr = ranArray($size);
         echo sumArr($arr,$height)."<br>";         
    }
    ?>
    <table border="1">
        <?php for ($i = 0; $i < count($arr); $i++) :  ?>
            <tr>
                <?php for ($j = 0; $j < count($arr[$i]); $j++) :  ?>
                    <td>
                        <?php echo $arr[$i][$j]; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>