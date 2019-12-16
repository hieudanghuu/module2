<?php 

include_once (dirname(__FILE__)."/../AbstractClass/Animal.php");
include_once (dirname(__FILE__)."/../InterfaceClass/Edible.php");
class Chicken extends Animal {
    public function makeSound()
    {
        return "Chicken: cluck - cluck!";
    }
    public function howToEat(){
        return "could be fried";
    }
}