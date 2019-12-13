<?php
include_once("Circle.php");
class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
        $this->color = $color;
    }
    public function calculateArea(){
        return round (parent::circleArea() * 2 + parent::circlePerimeter()* $this->height, 3);        
    }
    public function calculateVolume(){
        return round (parent :: circleArea() * $this->height,3);
    
    }
    public function toString(){
        return "Radius : " .$this->raduis."<br> Color : "
        .$this->color."<br> height :".$this->height."<br>Area :".$this->calculateArea().
        "<br> volume :".$this->calculateVolume();
    }
}
