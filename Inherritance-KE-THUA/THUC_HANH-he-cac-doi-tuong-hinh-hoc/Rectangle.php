<?php
include_once ("index1.php");
class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name,$width,$height)
    {
     parent::__construct($name);
     $this->width = $width;
     $this->height = $height;   
    }
    public function calculateArea(){
        return $this->height * $this->width;
    }
    public function calculatePerimeter(){
        return($this->height + $this->width) * 2;
    }
}