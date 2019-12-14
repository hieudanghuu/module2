<?php
include_once("Shape.php");
class Triangle extends Shape
{
    private $side1 = 1;
    private $side2 = 1;
    private $side3 = 1;
    private $color;

    public function __construct($side1, $side2, $side3, $color)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getSide1()
    {
        return $this->side1;
    }
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }
    public function getSide2()
    {
        return $this->side2;
    }
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }
    public function getSide3()
    {
        return $this->side2;
    }
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }
    public function getArea()
    {
        return  round (sqrt(($this->side1 + $this->side2 + $this->side3) *
         ($this->side1 + $this->side2 - $this->side3) *
          ($this->side3 + $this->side2 - $this->side1) *
           ($this->side1 + $this->side3 - $this->side2)) / 4,3);
    }
    public function getPreimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function toStringArea()
    {
        return "color : " . $this->color . "<br>cạnh a : " . $this->side1 . "<br>cạnh b : " . $this->side2 . "<br>cạnh c : "
            . $this->side3 . "<br>Area = " . $this->getArea() . "<br>";
    }
    public function toStringPre()
    {
        return "color : " . $this->color . "<br>cạnh a : " . $this->side1 . "<br>cạnh b : " . $this->side2 . "<br>cạnh c : "
            . $this->side3  . "<br>Preimeter = " . $this->getPreimeter() . "<br>";
    }
}
