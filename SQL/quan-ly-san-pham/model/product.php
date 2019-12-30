<?php

namespace Model;
class Product 
{
    public $id;
    public $name;
    public $price;
    public $describes;
    public $producer;

    public function __construct($name,$price,$describes,$producer)
    {
        $this->name = $name;
        $this->price = $price;
        $this->describes = $describes;
        $this->producer = $producer;
    }
}
