<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ứng dụng đọc số thành chữ</title>
</head>

<body>
    <form method="GET">
        <input id="input" type="text" name="number" value="<?php $_GET['number'] ?? 0 ?>" placeholder="Enter number">
    </form>
    <?php
    $numbers = [
        '0' => ' ',
        '1' => 'one',
        '2' => 'two',
        '3' => 'three',
        '4' => 'four',
        '5' => 'fine',
        '6' => 'six',
        '7' => 'seven',
        '8' => 'eight',
        '9' => 'nine',
        '10' => 'ten',
        '11' => 'eleven',
        '12' => 'twelve',
        '13' => 'thirteen',
        '15' => 'fifteen',
        '20' => 'twenty',
        '30' => 'thirty',
        '100' => 'one hundred'
    ];
    function numberToString($number)
    {
        global $numbers;
        
        if (
            strlen($number) === 1 || $number === '10' || $number === '11' || $number === '12'
            || $number === "13" || $number === "15" || $number === "20" || $number === "30"
            || $number === "100"
        ) {
            global $numbers;
            return $numbers[$number];
        }
        if (strlen($number) === 2 && $number[0] === '0' && $number[1] === '0') {
            global $numbers;
            return $numbers[$number[0]];
        }
        
        if (strlen($number) === 2 && $number[0] === '1') {
            global $numbers;
            return  numberToString(substr($number, 1)) . "teen";
        }
        if (strlen($number) === 2) {
            global $numbers;
            return $numbers[$number[0]] .
                'ty ' .
                numberToString(substr($number, 1));
        }
        
        if (strlen($number) === 3 && $number[0] == '0') {
            global $numbers;
            return $numbers[$number[0]] .
                'hundred ' .
                numberToString(substr($number, 1));
        }
        if (strlen($number) === 3) {
            global $numbers;
            return $numbers[$number[0]] .
                'hundred and ' .
                numberToString(substr($number, 1));
        }
        if (strlen($number) === 4) {
            if (numberToString(substr($number, 1)) === '0') {
                global $numbers;
                return $numbers[$number[0]] . "and" .
                    numberToString(substr($number, 1));
            } else {
                global $numbers;
                return $numbers[$number[0]] .
                    'thousand ' .
                    numberToString(substr($number, 1));
            }
        }
    }
    ?>
    <p>
        <?php
        $value = $_GET['number'] ?? 0;
        echo numberToString($value);
        ?>
    </p>
</body>

</html>