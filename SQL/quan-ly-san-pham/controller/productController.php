<?php

namespace Controller;

use Model\Product;
use Model\ProductDB;
use Model\DBConnection;

class ProductController 
{

    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=quan_ly_san_pham","root","");
        $this->productDB = new ProductDB($connection->connect());
    }

    public function add(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "../view/add.php";
        }else{
            $name = $_POST['name'];
            $price = $_POST ['price'];
            $describes = $_POST ['describes'];
            $producer = $_POST ['producer'];

            $product = new Product($name,$price,$describes,$producer);
            $this->productDB->Create($product);
            $message = 'product Create';
            include '../view/add.php';
        }
    }
    public function index(){
        $product = $this->productDB->getAll();
        include '../view/list.php';
    }
}