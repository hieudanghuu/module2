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
    <form method="post" >
        <div name="input">
            <h2>Nhập độ dài của mảng </h2><br>
            <h4>nhập độ dài mảng 1:</h4>
            <input type="text" name="length">
            <h4>nhập phần tử cần xóa</h4>
            <input type="text" name="num">
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
                array_push($arr, mt_rand(1, 20));
            }
            return $arr;
        }
        function seachNum($arr, $num)
        {
            for ($i = 0; $i < count($arr); $i++) {
                if ($arr[$i] === $num) {
                    $index_del = $i;
                } 
            }
            return $index_del;
        }      
        try {
            if (($_POST["length"] === '') || ($_POST["length"] === '0')
                || ($_POST["num"] === '0')
            ) {
                throw new Exception("không được bỏ trống");
            } else {
                $arr1 = ranArray($_POST["length"]);
                echo "<pre>";
                echo print_r ($arr1);
                echo "<pre>";
                echo "giá trị bị xóa là :" . $_POST["num"];
                $indexDEL = seachNum($arr1,$_POST['num']);
                unset($arr1[$index_del]);
                echo print_r($arr1);
            }          
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>
</body>

</html>