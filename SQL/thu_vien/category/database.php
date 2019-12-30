<?php
$severName = "localhost";
$userName = "root";
$passWord = "";
$databaseName = "quan_ly_thu_vien";
$connection = new PDO('mysql:host=' . $severName . ';dbname=' . $databaseName, $userName, $passWord)
    or die("lỗi kết đến sever");
$query = "SELECT * FROM category";
$result = $connection->query($query);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
