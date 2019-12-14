<?php
class Point
{
    private $x;
    private $y;

    public function __construct($x,$y){
       $this->x = $x;
       $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x = $x;
    }
    public function getY(){
        return $this->y;
    }
    public function setY($y){
        $this->y = $y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY(){
        return $this->x.$this->y;
    }
    public function toString(){
        return '"('.$this->x.",".$this->y.')';
    }
}
include_once ("MovablePoint.php");
$point = new Point(2,4);
echo "Point :".$point->toString().'"<br>';

$movablePoint = new MovablePoint(3,5,10,20);
echo "MovablePoint :".$movablePoint-> toString()."<br>";
echo $movablePoint->move();

?>