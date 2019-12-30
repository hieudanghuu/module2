<?php
class Point2d
{
    private $x;
    private $y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setX($x){
        $this->x = $x;
    }
    public function setY($y){
        $this->y = $y;
    }
    public function getXY(){
        return "Array of {". $this->x.",".$this->y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function toString(){
        return '"('.$this->x.",".$this->y;
    }
}


include_once ("Point3D.php");
$point2d = new Point2d(2,4);
echo $point2d-> getXY() ."} <br>";
echo $point2d-> toString().')" <br><br>';

$point3d = new Point3d(3,5,7);
echo $point3d-> getXYZ()."<br>";
echo $point3d-> toString();

?>
