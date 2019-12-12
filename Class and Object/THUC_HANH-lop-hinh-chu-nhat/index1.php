<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    class Rectangle
    {
      public $width;
      public $height;
    
      public function __construct($width, $height)
      {
          $this->width = $width;
          $this->height = $height;
      }
      public function getArea()
      {
          return $this->width * $this->height;
      }
      public function getPerimeter()
      {
        return(($this->width + $this->height)*2);
      }
      public function display()
      {
          return "Rectangle {"."Width = " . $this->width . ", height = " . $this->height."}";
      }
    }
?>
</body>
</html>