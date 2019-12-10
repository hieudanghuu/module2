<html>
<style>
    form {
        text-align: center;
        width: 400px;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        padding: 12px 10px 12px 10px;
        box-shadow: 5px 5px #ff8080
    }

    h1 {
        color: blue;
    }

    label {
        color: red;
    }
</style>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ten = $_POST["name"];
        $gia = $_POST["price"];
        $chietkhau = $_POST["discount"];
        $tien_chietkhau = ($gia * $chietkhau)/100;
        $gia_chieckhau = $gia - $tien_chietkhau;
    }
    ?>
    <form action="display.php" method="post">
        <h1>Product Discount Calculator</h1>
        <label>Product Description: <?php echo $ten ?></label><br><br>
        <label>Price: <?php echo '$'. $gia?></label><br><br>
        <label>Discount Percent:<?php echo $chietkhau.'%' ?></label><br><br>
        <label>Discount Amount:<?php echo '$'.$tien_chietkhau ?></label><br><br>
        <label>Discount Price:<?php echo '$'.$gia_chieckhau ?></label><br><br>
        <label></label>
    </form>
</body>

</html>