<?php
include_once("Point.php");
class MovablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {

        parent::__construct($x, $y);
        $this->x = $x;
        $this->y = $y;
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function MovablePoint($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        return $this->xSpeed . $this->ySpeed;
    }
    public function toString()
    {
        return parent::toString() . ", speed = (" . $this->x . "s," . $this->y . 's)"';
    }
    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "move X = ".$this->x."<br>move Y = ".$this->y;
    }
}
