<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <div>
            <h1>Nhập Phần Tử Muốn Kiểm Tra :</h1>
            <input type="text" name="num">
        </div><br>
        <div>
            <input type="submit" value="Enter">
        </div>
    </form>
    <?php
    function ranArray($len)
    {
        $arr = [];
        for ($i = 0; $i < $len; $i++) {
            array_push($arr, mt_rand(1, 100));
        }
        return $arr;
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
try 
{
    if($_POST["num"] === ""  || $_POST["num"] > 100 ){
    throw new Exception(" ko được rỗng và lớn hơn 100 ");
    } else {       
       $arr = ranArray(20);
       echo "<pre>";
       echo print_r($arr);      
    }
    }
    catch (Exception $e){
        echo $e -> getMessage();
    }
}
    ?>
</body>
</html>