<?php



$servername = "127.0.0.1";

$username = "root";

$password = "";

$dbname = "quan_y_thuvien";



try {

    $conn= new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "error" .$e->getMessage();

}

