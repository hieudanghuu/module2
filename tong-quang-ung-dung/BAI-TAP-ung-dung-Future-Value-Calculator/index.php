<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ứng dụng tính lãi suất</title>
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
        label{
            color: red;
        }
    </style>
</head>

<body>
    <form action="calculate.php" method="post">
        <div id="data">
            <h1>Future Value Calculator</h1>           
            <label> Investment Amount: <input type="text" name="tien"  require></label><br><br>
            <label> Yearly Interest Rate: <input type="text" name="lai" require></label><br><br>
            <label> Number of Years :<input type="text" name="nam" require></label><br><br>

        </div>
        <div>
            <input type="submit" name="tinh" value="Calculate">
        </div>
    </form>
</body>
</html>