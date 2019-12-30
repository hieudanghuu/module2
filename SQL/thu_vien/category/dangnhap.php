<?php
    $severName = "localhost";
    $userName = "root";
    $passWord = "";
    $databaseName = "quan_ly_thu_vien";
    $connection = new PDO('mysql:host='.$severName.';dbname='.$databaseName,$userName,$passWord);

// $connection = new mysqli($severName, $userName,$passWord,$databaseName);

// var_dump($connection);

// if($connection->connect_errno){
//     exit ("Database connection failed . reason" .$connection->connect_error);

// }else {
//     echo "<br>Connection Succesed";
// }
// $seachId = 100;

// $query = "SELECT name,describes FROM category WHERE id = ?";
// $statement = $connection->prepare($query);
// $statement->bind_param("d",$seachId);
// $statement->execute();

// $statement->bind_result($name,$describes);
// $statement->store_result();


// // $result = $connection->query($query);
// // $connection->query($query);
// // echo " <br> id mới là " .$connection->insert_id;
// if($statement->num_rows() > 0){
//     while($statement->fetch()){
//         echo $statement. ''.$name. ''."<br>";
//     }
// }
// $statement->close();
// $connection->close();
$query = "SELECT name,describes from category";

$result = $connection->query($query);

if($result->rowCount() >0){
    foreach($result as $key => $rs) {
        echo $key ."=>".$rs ['name'] . '<br>';
    }
}
$connection = null;
 ?> 