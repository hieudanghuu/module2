<?php include_once "header.php"; ?>

<style>

    div {

        width: 600px;

        border: 1px black;

        margin: 0 auto;

    }

</style>

<div>

<form method="post">

    Category Code: <input type="text" placeholder="Category code" name="category_code"><br><br>

    Category Name: <input type="text" placeholder="Category name" name="category_name"><br><br>

    <label>Descriptions:</label><br>

    <textarea rows="10" cols="50" placeholder="Descriptions" name="descriptions"></textarea><br><br>



    <input name="ok" type="submit" value="OK">

    <button><a href="Category.php">Back</a> </button>

</form>

</div>

<?php

include_once "db_connect.php";



if ($_POST){

    if (isset($_POST['ok'])){

        try {

            $categoryCode = $_POST['category_code'];

            $categoryName = $_POST['category_name'];

            $description = $_POST['descriptions'];



            $data = $conn->exec("INSERT INTO categories(categoryCode,categoryName,textDecription) VALUES ('$categoryCode','$categoryName','$description')");

            echo "insert ok";

            $last_id = $conn->lastInsertId();

        }

        catch (PDOException $e){

            echo "Error:" .$e->getMessage();

        }

    }

}

?>