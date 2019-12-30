<?php
 include_once ("Vehicle.php");
class Plane extends Vehicle
{
    protected $engineCount;
    protected $operator;
    protected $country;

    public function __construct($type,$engineCount,$operator,$country)
    {
        parent::__construct($type);
        $this->type = $type;
        $this->engineCount = $engineCount;
        $this->operator = $operator;
        $this->country = $country;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function setOperator($operator){
        $this->operator = $operator;
    }
    public function getOperrato(){
        return $this->operator;
    }
    public function setEngineCount($engineCount){
        $this->engineCount = $engineCount;
    }
    public function getEngineCount(){
        return $this->engineCount;
    }
    public function setContry($country){
        $this->country = $country;

    }
    public function getCountry(){
        return $this->country;
    }
}