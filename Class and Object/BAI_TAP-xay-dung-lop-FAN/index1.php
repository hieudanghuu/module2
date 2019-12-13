<?php
class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    public function __construct()
    {
        $this->speed = Fan::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }
    public function getSpeed()
    {
        return $this->speed;
    }
    public function getOn()
    {
        return $this->on;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setSpeed($speed)
    {
        if($speed === 1){
            $this->speed = Fan::SLOW;
        }
        if($speed === 2){
            $this->speed = Fan::MEDIUM;
        }
        if($speed === 3){
            $this->speed = Fan::FAST;
        }         
    }
    public function setOn($on)
    {
         $this->on = $on;
    }
    public function setRadius($radius)
    {
         $this->radius = $radius;
    }
    public function setColor($color)
    {
         $this->color = $color;
    }
    public function toString()
    {
        if($this->getOn() === true){
            return "speed : ".$this->getSpeed()."<br> radius: ". $this->getRadius() ."<br> color:".$this->getColor()."<br> fan is on";
        }else {
            return "radius: ". $this->radius ."<br> color:".$this->color."<br> fan is off";
        }      
    }
}
$fan = new Fan();
$fan1 = new Fan();
echo "Fan <br>".$fan->toString()."<br>";
$fan1->setOn(true);
$fan1->setSpeed(Fan::FAST);
$fan1->setColor("yello");
$fan1->setRadius(10);
$rerult = $fan1->toString();
echo "Fan1 <br>".$rerult;

?>



