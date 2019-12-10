<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    form {
            text-align: left;
            width: 500px;
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
    <form action="display.php" method="post">
        <h1>Product Discount Calculator</h1>
        <label>Product Description:</label><br><input class='demo'type="text" name= "name" required><br>
        <label>List Price:</label><br><input type="text" class='demo'name = "price"required><br>
        <label>Discount Percent:</label> <br><input class='demo' type="text" name="discount"required> (%)<br>
        <input type="submit" name="calculate" value="calculate">
    </form>
</body>
</html>