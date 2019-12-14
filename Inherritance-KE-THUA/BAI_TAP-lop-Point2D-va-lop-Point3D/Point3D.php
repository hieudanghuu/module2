<?php
include_once ("Point2D.php");
class Point3d extends Point2d
{
    public $z;

    public function __construct($x,$y,$z)
    {
         parent::__construct($x,$y);
            $this->z = $z;          
    }
     
    public function getZ(){
        return $this->z;
    }
    public function setX($x){
        parent::setX($x);
    }
    public function setY($y){
        parent::setX($y);
    }
    public function setZ($z){
        $this->z = $z;
    }
    public function getXYZ(){
      return  parent::getXY().",".$this->z."}";       
    }
    public function setXYZ($x,$y,$z){
        parent::setXY($x,$y);
        $this->z = $z;
    }
    public function toString()
    {
        return parent::toString().",".$this->z.')"';
    }
}
?>