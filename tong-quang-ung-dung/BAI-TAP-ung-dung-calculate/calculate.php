<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $tinh = $_POST["tinh"];
    if ($tinh == "+"){
        $result = $num1 + $num2;
    }
    if( $tinh == "-"){
        $result = $num1 - $num2;
    }
    if ($tinh == "*"){
        $result = $num1 * $num2;
    }
    if ( $tinh == "/"){
        $result = $num1 / $num2;
    }
}
?>
    <h1>Result</h1>
    <div><?php echo "$num1 $tinh $num2 = $result"?></div>