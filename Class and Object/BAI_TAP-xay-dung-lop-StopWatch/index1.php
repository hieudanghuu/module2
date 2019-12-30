<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            width: 100px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 4px solid navy;
            text-align: center;
        }
    </style>
</head>

<body>
    <form name="form1" method="post">
        <h1><input type="submit" name="star" value="star"></h1>
        <h1><input type="submit" name="end" value="end"> </h1>
    </form>
    <?php
    class StopWatch
    {
        private $startime;
        private $endtime;
        public function __construct($startime, $endtime)
        {
            $this->startime = $startime;
            $this->endtime = $endtime;
        }
        public function getStartime()
        {
            return  $this->startime;
        }
        public function getEndtime()
        {
            return $this->endtime;
        }
        public function start($startime)
        {
            $this->startime = $startime;
        }
        public function end($endtime)
        {
            $this->endtime = $endtime;
        }
        public function getElapsedTime()
        {
            return $this->endtime - $this->startime;
        }
        public function displays()
        {
            list($usec, $sec) = explode(" ", microtime());
            return ((float) $usec + (float) $sec);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function displays1()
        {
            list($usec, $sec) = explode(" ", microtime());
            return ((float) $usec + (float) $sec);
        }

        $time1 = $_POST["star"];
        $time1 =  displays1();
        usleep(100);
        $time2 = $_POST["end"];
        $time2 = displays1();

        $time = new StopWatch($time1, $time2);

        // echo $_POST["end"] - $_POST["star"];


        $time->getElapsedTime();

        if( $_POST["star"]){
         
            echo date("l jS \of F Y h:i:s A") . "<br>";
            usleep($time->getElapsedTime()*1000);
            if( $_POST["end"]){
                echo date("l jS \of F Y h:i:s A") . "<br>";             
                echo $time->getElapsedTime();
            }
        }      
    }
    ?>


</body>

</html>