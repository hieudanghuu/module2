<?php
include_once("Vehicle.php");
include_once("Car.php");
include_once("Plane.php");
include_once("Train.php");

$vehicle = new Vehicle()

$car = new Car("yamaha");
echo $car->setHasTrunk()
         ->setOwner();


$plane = new Plane("boing",4,"BMW","Mỹ");
echo $plane->setType();
echo $plane->setOperator();
echo 
