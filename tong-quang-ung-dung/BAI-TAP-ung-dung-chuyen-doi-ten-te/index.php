<!DOCTYPE>
<html>

<head>

</head>

<body>
    <form name="" id="doi" method="post">
        <h2>nhập số tiền</h2> <input type="text" name="input" >
        <input type="submit" name="doi"value = "change"><br><br>
        <select name="money1" >
            <option value="VND">VNĐ</option>
            <option value="USD">USD</option>
        </select>
        <h3>từ </h3>
        <select name="money2" >
            <option value="VND">VNĐ</option>
            <option value="USD">USD</option>
        </select>
        <div><?php ?></div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["money1"] == "VND" && $_POST["money2"] == "USD") {
            $result = $_POST["input"] / 23000;
            echo "$result VNĐ";
        }
        if ($_POST["money1"] == "USD" && $_POST["money2"] == "VND") {
            $result = $_POST["input"] * 23000;
            echo "$result USD";
        }
    }
    ?>

</body>

</html>