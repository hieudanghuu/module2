<?php
class Circle {
    private $radius;
    private $color;

    public function __construct($radius,$color)
    {
        $this->raduis = $radius;
        $this->color = $color;
    }
    public function getRadius(){
        return $this->raduis;
    }
    public function getColor(){
        return $this->color;
    }
    public function setRadius($radius){
        $this->raduis = $radius;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function circleArea(){
        return round (pi()* pow($this->raduis,2),3) ;
    }
    public function circlePerimeter(){
        return round (pi() * $this->raduis * 2,3); 
    } 
    public function toString(){
        return "Radius : " .$this->raduis."<br> Color : "
        .$this->color."<br> CircleArea :".$this->circleArea()."<br><br><br>";
    }
}
include_once ("Cylinder.php");
$circle = new Circle(5,"blue");
echo $circle->toString();
$cylinder = new Cylinder(5,"red",5);
echo $cylinder->toString();

?>