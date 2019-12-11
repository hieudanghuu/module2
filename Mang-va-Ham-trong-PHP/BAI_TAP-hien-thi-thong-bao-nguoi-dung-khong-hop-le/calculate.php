<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $tinh = $_POST["tinh"];
    
    try{
        if($tinh ==="/"  && $num2 ==="0"){
            throw new Exception(" ko được chia cho 0");  
        }else{
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
            echo "resule: ". "$num1 $tinh $num2 = $result";
        }     
    }catch(Exception $e){
        echo $e->getMessage();
    }
  
}
