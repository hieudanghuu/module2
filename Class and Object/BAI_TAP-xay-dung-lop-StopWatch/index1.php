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
        <h1><input type="submit" name="star" value="Startime">
            <div><?php $displayStar ?><br></div>
        </h1>

        <h1><input type="submit" name="end" value="Endtime"> </h1>
        <div <?php $displayEnd ?>></div>
        <div <?php $stoptime ?>><input type="submit" value="Enter"></div>
        
    </form>
    <?php
    class StopWatch
    {
        private $startime;
        private $endtime;
        public function __construct()
        {
            $this->startime;
            $this->endtime;
        }
        public function getStartime()
        {
            return  $this->startime;
        }
        public function getEndtime()
        {
            return $this->endtime;
        }
        public function start()
        {
            return date('s');
        }
        public function end()
        {       
            return date('s');
        }
        public function getElapsedTime()
        {
            return $this->end() - $this->start();
        }
        public function displaysStar()
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            echo date('Y-M-d h:m:s');
        }
        public function displaysEnd()
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            echo date('Y-M-d h:m:s');
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $time = new StopWatch();
        $startime = $time->start();

        $endtime = $time->end();
        $displayStar = $time->displaysStar();
        $displayEnd = $time->displaysEnd();
        $stoptime = $time->getElapsedTime();
    }
    ?>


</body>

</html>