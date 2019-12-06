<html>
    <head>
       <title>Thời gian hiện tại</title>
    </head>
    <body>
        <h1>  Current Server Time is: 
             <?php
             date_default_timezone_set('Asia/Ho_Chi_Minh');
            echo date('Y-M-d h:m:s'); ?> 
        </h1>
    </body>
</html>