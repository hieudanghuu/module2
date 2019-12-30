<style>
    div {

        width: 600px;

        margin: 0 auto;

    }
</style>





<?php

include_once "db_connect.php";

include_once "header.php";



$id = $_GET['id'];

$sql = "SELECT * FROM categories WHERE categoryCode = '$id'";

$data = $conn->prepare($sql);

$data->execute();

$obj = $data->fetch(PDO::FETCH_OBJ);

?>

<div>

    <form method="post">

        Category Code: <input type="text" value="<?php echo $obj->categoryCode; ?>" name="category_code"><br><br>

        Category Name: <input type="text" value="<?php echo $obj->categoryName; ?>" name="category_name"><br><br>

        <label>Descriptions:</label><br>

        <textarea rows="10" cols="50" name="descriptions"><?php echo $obj->textDecription; ?></textarea><br><br>



        <input name="ok" type="submit" value="OK">

        <button><a href="Category.php">Back</a> </button>

    </form>

</div>

<?php

if ($_POST) {

    if ($_POST['ok']) {

        $category_code = $_POST['category_code'];

        $category_name = $_POST['category_name'];

        $description = $_POST['descriptions'];

        $sql = "UPDATE categories SET categoryCode = '$category_code', categoryName = '$category_name', textDecription = '$description'

            WHERE categoryCode = '$id'";

        $data = $conn->prepare($sql);

        $data->execute();

        header("location: Category.php");
    }
}
