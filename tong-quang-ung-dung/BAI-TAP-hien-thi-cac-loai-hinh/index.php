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
        <select name="prints">
            <option value="hv">Print the rectangle</option>
            <option value="tg">Print the square triangle</option>
            <option value="tgc">Print isosceles triangle</option>
        </select><br><br>
        <div>
            <input type="submit" name="print" value="Print">
        </div>
    </form>
    <?php

    function rectangle()
    {
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 50; $j++) {
                echo '*';
            }
            echo "<br>";
        }
    }

    function triagle()
    {
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo '*';
            }
            echo "<br>";
        }
    }

    function tgv()
    {
        for ($i = 7; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) { 
                echo '*&ensp;';
            }
            echo "<br>";
        }
    }

    function draw(string $choose)
    {
        switch ($choose) {
            case 'hv':
                rectangle();
                break;
            case 'tg':
                triagle();
                break;
            case 'tgc':
                tgv();
                break;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $printRectangle = $_POST["prints"];
        // var_dump($printRectangle);
        draw($printRectangle);
    }

    ?>
</body>

</html>