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
    <form method="get">
        <h1>Library Manager</h1>
        <br><br>
        <h2>Categories List</h2>
        <a href="category/add.php" class="btn btn-primary">Create</a>
        <br><br>
        <table class="table table-striped">
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Category Name</th>
                <th scope="col">Describes</th>
                <th scope="col">action</th>
            </tr>
            <!-- nhúng conect -->
            <?php include_once "category/database.php";
            // include_once "category/delete.php";
            ?>

            <?php foreach ($result as $key => $result) { ?>
                <tr>
                    <td><?php echo  $result["id"]; ?> </td>                    
                    <td><?php echo $result["name"]; ?> </td>
                    <td><?php echo $result["describes"]; ?> </td>
                    <td>
                        <button><a href="category/edit.php?id=<?php echo $result["id"]; ?>">edit</a></button>
                        <button><a href='category/delete.php?id=<?php echo $result["id"]; ?>
                        'onclick="return confirm('bạn muốn xóa không')" >delete</a></button>
                        
                    </td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>
</html>