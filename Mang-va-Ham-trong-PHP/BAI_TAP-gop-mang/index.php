<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }
    </style>
</head>

<body>
    <form method="post">

        <div name="input">
            <h2>Nhập độ dài của mảng </h2><br>
            <h4>nhập độ dài mảng 1:</h4><input type="text" name="length">
            <h4>nhập độ dài mảng 2:</h4><input type="text" name="length1">
        </div><br><br>
        <div>
            <input type="submit" name="print" value="Enter">
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function ranArray($length)
        {
            $arr = [];
            for ($i = 0; $i < $length; $i++) {
                array_push($arr, mt_rand(1, 100));
            }
            return $arr;
        }
        function arrPlus($arr1, $arr2)
        {
            $array = [];
            for ($i = 0; $i < count($arr1); $i++) {
                array_push($array, $arr1[$i]);
            }
            for ($j = 0; $j < count($arr2); $j++) {
                array_push($array, $arr2[$j]);
            }
            return $array;
        }
        // function disArray($arr){
        //     for($i = 0 ;$i < count($arr);$i ++){
        //         return $arr[$i];
        //     }
        // }
        $length = $_POST["length"];
        $length1 = $_POST["length1"];
        $arr1 = ranArray($length);
        $arr2 = ranArray($length1);
        $arr3 = arrPlus($arr1, $arr2);
        // $arr4 = disArray($arr1);
        // $arr5 = disArray($arr2);
        // $arr6 = disArray($arr3);

        echo "Mảng 1 :" . var_dump($arr1) . "<br>";
        echo "Mảng 2 :" . var_dump($arr2) . "<br>";
        echo "Mảng 3 :" . var_dump($arr3);
    }
    ?>
</body>

</html>