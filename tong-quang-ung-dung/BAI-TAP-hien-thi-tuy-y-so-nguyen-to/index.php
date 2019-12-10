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
    <input type="text" name = "num">
    <input type="submit" value="enter">
    </form>
    <?php  
    function checkPrimer($number) {
        if ($number < 2){
            return false;
        } 
        if ($number === 2){
            return true;
        }
        if ($number % 2 == 0) {
            return false;
        }
        for ($i = 2; $i <$number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $count = 0;
    $j = 0;
    while ($count <$_POST["num"]){
        if(checkPrimer($j)===true) {
            echo $j ."<br>";
            $count ++;
        }
        $j++;
    }
}
    ?>
</body>
</html>