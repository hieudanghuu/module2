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
    include_once "index1.php";
    $width = 10;
    $height = 20;
    $rectangle = new Rectangle($width,$height);

    echo $rectangle->getArea() . "<br>";
    echo $rectangle -> getPerimeter() . "<br>";
    echo $rectangle->display();
    ?>
</body>
</html>