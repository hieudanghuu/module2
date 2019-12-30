<?php
include "database.php";
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($_SERVER["REQUEST_METHOD"] == "GET"){
$id = $_GET['id'];
$delete = "DELETE FROM category WHERE id = '$id'";
$del = $connection->prepare($delete) or die("lỗi kết nối");
$del->execute();
header("location:../index.php");
}
?>