<style>

    table, td {

        border: 1px solid black;

    }

    th {

        background: #9fcdff;

    }

    .content{

        width:800px;

        margin: 0 auto;



    }

</style>



<?php

include_once "db_connect.php";

include_once "header.php";





$sql = $conn->prepare("SELECT * FROM categories");

$sql->execute();

$sql->setFetchMode(PDO::FETCH_ASSOC);



$data = $sql->fetchAll();

?>

<div class="content">

<form method="post">

    <button><a href="Add.php">ADD</a> </button><br><br>

    <table>

        <th>Category Code</th>

        <th>Category Name</th>

        <th>Descriptions</th>

        <th>action</th>
        <?php

        foreach ($data as $key => $value){?>

            <tr>

                <td> <?php echo $value['categoryCode']; ?></td>

                <td> <?php echo $value['categoryName']; ?></td>

                <td> <?php echo $value['textDecription']; ?></td>

                <td>

                    <button><a href="Edit.php?id=<?php echo $value['categoryCode'];?>">EDIT</a></button>

                    <button>

                        <a href="Delete.php?id=<?php echo $value['categoryCode'];?>" onclick="return confirm('Are you sure you want to delete?')" value="<?php echo $value['officeCode'];?>">Delete</a>

                    </button>

                </td>

            </tr>

        <?php } ?>



    </table>

</div>

</form>