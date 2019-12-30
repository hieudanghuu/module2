<?php

include_once "db_connect.php";



$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];

try {

    $sql = "DELETE FROM categories WHERE categoryCode = '$id'";

    $data = $conn->prepare($sql);

    $data->execute();

    header("location: index.php");

}

catch (PDOException $e){

    echo "Error:" .$e->getMessage();

}

