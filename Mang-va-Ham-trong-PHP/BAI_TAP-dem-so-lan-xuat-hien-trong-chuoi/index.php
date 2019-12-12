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
        <div>
            <h2>Nhập Chuỗi:</h2>
            <input type="text" name="string"><br>
            <h2>Nhập ký tự cần kiểm tra :</h2><br>
            <input type="text" name="string1">
        </div><br>
        <div>
            <input type="submit" name="check">
        </div>
    </form>
    <?php
    function seachStr($str,$str1){
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) { 
            if($str[$i] === "$str1"){
                  $count ++;
            }
        }return $count;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if (($_POST["string"] === 0) || ($_POST["string1"] === 0)) {
                throw new Exception("không được rỗng");
            } else { 
               echo"trùng ". seachStr(trim($_POST["string"]),$_POST["string1"]). " lần";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>

</body>

</html>