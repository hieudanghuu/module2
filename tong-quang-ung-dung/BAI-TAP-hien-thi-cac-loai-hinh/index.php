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
            text-align: auto;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }
    </style>
</head>

<body>
    <form method="post">
        <select name="prints" id="">
            <option value="hv">Print the rectangle</option>
            <option value="tg">Print the square triangle</option>
            <option value="tgc">Print isosceles triangle</option>
        </select><br><br>
        <div>
            <input type="submit" name="print" value="Print">
        </div>
    </form>
    <?php
    $rectangle = array(
        array('*', '*', '*', '*', '*', '*', '*'),
        array('*', '*', '*', '*', '*', '*', '*'),
        array('*', '*', '*', '*', '*', '*', '*')
    );
    function rectangle()
    {
        for ($i = 0; $i < 7; $i++) {
            for ($j = 0; $j < 3; $j++) {
                return $rectangle[$i][$j];
            }
        }
    };

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $printRectangle = $_POST["prints"];
        if ($printRectangle == "hv") { 
             echo (rectangle());
        }
    }

    ?>
</body>

</html>