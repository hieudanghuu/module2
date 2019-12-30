<?php
include_once("Vehicle.php");
class Car extends Vehicle
{
    protected $hasTrunk ;
    protected $owner;

    public function __construct($type)
    {
        parent::__construct($type);      
    }
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
    public function getOwner()
    {
        return $this->owner;
    }
    public function getHasTrunk()
    {
        if ($this->hasTrunk === "Trunk") {
            return "là Trunk ";
        } else {
            return " không phải Trunk ";
        }
    }
    public function setHasTrunk($hasTrunk)
    {
        $this->hasTrunk = $hasTrunk;
    }
}
