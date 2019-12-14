<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            width: 200px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;

        }
    </style>
</head>

<body>
    <form method="post">

        <span>
            <h2>nhập cạnh a :</h2><input type="text" name="a">
        </span><br>
        <span>
            <h2>nhập cạnh b :</h2><input type="text" name="b">
        </span><br>
        <span>
            <h2>nhập cạnh c :</h2><input type="text" name="c">
        </span><br>
        <span>
            <h2>nhập cạnh color :</h2><input type="text" name="color">
        </span><br>
        <select name="from">
            <option value="area">Area</option>
            <option value="preimeter">Preimeter</option>
        </select><br>

        <div><input type="submit" value="Enter"></div>

    </form>
    <?php
    class Shape
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        public function show()
        {
            return "I am a shape. My name is" . $this->name;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            if ($_POST["a"] === 0 || ($_POST["b"] === 0) || ($_POST["c"] === 0)) {
                throw new Exception("không được rỗng");
            } else {
                include_once("Triangle.php");
                $triangle = new Triangle($_POST["a"], $_POST["b"], $_POST["c"],$_POST["color"]);
                if($_POST["from"] == "area"){
                    
                    echo $triangle->toStringArea();
                }
                if($_POST["from"] == "preimeter"){
                    echo $triangle->toStringPre();
                }              
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    ?>

</body>

</html>