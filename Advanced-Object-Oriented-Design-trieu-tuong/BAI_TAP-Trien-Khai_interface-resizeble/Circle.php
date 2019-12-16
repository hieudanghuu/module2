<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:14
 */
include_once ('Shape.php');
include_once ("Resizeable.php");
class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return round (pi() * pow($this->radius, 2),2);
    }

    public function calculatePerimeter(){
        return round (pi() * $this->radius * 2,2);
    }
    public function resize($num)
    {
         return "Circle Area đã thay đổi : ".round($this->calculateArea() + ($this->calculateArea()*$num/100 ),2)."<br>".
         "Circle Perimeter đã thay đổi : " .round($this->calculatePerimeter() + ($this->calculatePerimeter() *$num/100),2)."<br>";
    }
}