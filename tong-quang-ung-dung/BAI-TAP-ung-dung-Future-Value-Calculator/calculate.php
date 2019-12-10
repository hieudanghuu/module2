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
    </style>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $money = $_POST["tien"];
        $lai = $_POST["lai"];
        $nam = $_POST["nam"];
        if ($nam === '1') {
            $calculater = $money + ($lai * $money);
        } else {
            $calculater = ($money + ($lai * $money)) * $nam;
        }
    }
    ?>
    <form >
    <h1>Future Value Calculator</h1>
    <label> Investment Amount: <?php echo ' $' . $money ?></label><br><br>
    <label> Yearly Interest Rate: <?php echo $lai . ' %' ?></label><br><br>
    <label> Number of Years : <?php echo $nam . ' year' ?></label><br><br>
    <label> Future Value: <?php echo $calculater ?></label>
    </form>
</body>

</html>