<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    include "database.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $id = $_GET["id"];
        $edit = "SELECT * FROM category WHERE id = '$id'";
        $data = $connection->prepare($edit);
        // var_dump($data);
        $data->execute();
        $obj = $data->fetch(PDO::FETCH_OBJ);
    }
    ?>
    <form method="post">
        <div class="form-group">
            Category Name: <input type="text" value="<?php echo $obj->name; ?>" name="name"><br><br>
        </div>
        <div class="form-group">
            <label>Descriptions:</label><br>
            <textarea rows="10" cols="50" name="describes">  <?php echo $obj->describes; ?></textarea><br><br>
        </div>
        <input name="ok" type="submit" value="OK">
        <button><a href="../index.php">Back</a> </button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        if ($_POST["ok"]) {
            $name = $_POST["name"];
            $describes = $_POST["describes"];
            $sql = "UPDATE category SET name = '$name' , describes = '$describes' WHERE id = '$id'";
            $data = $connection->prepare($sql);
          
            $data->execute();         
                header("location:../index.php");
        }
    }
    ?>
</body>

</html>