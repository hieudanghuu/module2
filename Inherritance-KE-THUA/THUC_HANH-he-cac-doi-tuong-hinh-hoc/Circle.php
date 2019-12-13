<?php
include_once ("index1.php");
class Circle extends Shape
{
    public $raduis;
    public function __construct($name,$radius){
        parent::__construct($name);
        $this->raduis = $radius ;
    }
    public function calculateArea(){
        return pi()* pow($this->raduis,2);
    }
    public function calculatePerimeter(){
        return pi() * $this->raduis * 2; 
    }   
}