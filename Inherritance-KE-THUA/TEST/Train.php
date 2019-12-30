<?php 

include_once("Vehicle.php");
class Train extends Vehicle
{
    protected $carCount;
    protected $operator;
    protected $country;

    public function __construct($type,$carCount)
    {
        parent ::__construct($type);
        $this->type = $type;
        $this->carCount = $carCount;
    }
    public function setOperator($operator){
        $this->operator = $operator;
    }
    public function getOperator(){
        return $this->operator;
    }
}