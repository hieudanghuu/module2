<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="content">
        <h1>Simple Calculator</h1>
        <form action="calculate.php" method="post">
            <div id=data> 
                <h2>Calculator</h2>
                <label>First operand:</label><input type="text" name="num1" require><br><br>
                <label>Operator:</label>
                <select name="tinh">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">:</option>
                </select><br><br>
                <label>Second operator :</label> <input type="text" name="num2" require><br><br>
            </div>
            <div id="buttons">
                <input type="submit" value="calculate">
            </div>
        </form>
    </div>
</body>
</html>