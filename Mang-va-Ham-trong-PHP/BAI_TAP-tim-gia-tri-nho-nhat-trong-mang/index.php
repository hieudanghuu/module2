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
            <h4>nhập độ dài mảng 1:</h4>
            <input type="text" name="length">
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
        function arrMin($arr)
        {
            $min = $arr[0];
            for ($i = 1; $i < count($arr); $i++) {
                if ($arr[$i] < $min) {                
                    $min = $arr[$i];
                }
                return $min;
            }
        }
        $arr1 = ranArray($_POST["length"]);
        echo var_dump($arr1)."<br>";
        echo arrMin($arr1);
    }
    ?>
</body>

</html>