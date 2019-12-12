<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 4px solid navy;
        }
    </style>

</head>

<body>
    <form method="post">
        <div>
            <h4>nhập a :</h4><input type="text" name="a"><br>
            <h4>nhập b :</h4><input type="text" name="b"><br>
            <h4>nhập c :</h4><input type="text" name="c">
        </div><br>
        <input type="submit" value="tính">
    </form>
    <?php
    class QuadraticEquation
    {
        private $a;
        private $b;
        private $c;
        public function __construct($_a, $_b, $_c)
        {
            $this->a = $_a;
            $this->b = $_b;
            $this->c = $_c;
        }
        public function getterA()
        { }
        public function getDiscriminant()
        {
            $delta = ($this->b * $this->b) - (4 * $this->a * $this->c);
            return $delta;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        try {
            if (($_POST["a"] === '') || ($_POST["b"] === '') || ($_POST["c"] === '')) {
                throw new Exception("không được Rỗng");
            } else {

                $a = isset($_POST['a']) ? $_POST['a'] : '';
                $b = isset($_POST['b']) ? $_POST['b'] : '';
                $c = isset($_POST['c']) ? $_POST['c'] : '';
                $result = new QuadraticEquation($a, $b, $c);
                if ($result->getDiscriminant() < 0) {
                    echo $pt = "Phương trình vô nghiệm";
                } else if ($result->getDiscriminant() === 0) {
                    echo $pt = 'Phương trình nghiệp kép x1 = x2 = ' . (-$b / 2 * $a);
                } else {
                    echo $pt = 'Phương trình có hai nghiệp phân biệt, x1 = ' . round(((-$b + sqrt($result->getDiscriminant())) / 2 * $a),3);
                    echo $pt .= ',x2 = ' . round(((-$b - sqrt($result->getDiscriminant())) / 2 * $a),3);
                }
            }
        } catch (Exception $e) {
           echo $e->getMessage();
        }
    }
    ?>
</body>

</html>