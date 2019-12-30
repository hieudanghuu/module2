<?php
namespace Model;
class ProductDB {
    public $connection;
    
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function Create ($product){
        $sql = "INSERT INTO product (name,price,describes,producer) 
        VALUES (?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1,$product->name);
        $statement->bindParam(2,$product->price);
        $statement->bindParam(3,$product->describes);
        $statement->bindParam(4,$product->producer);
        return $statement->execute();
    }
    public function getAll(){
        $sql = "SELECT * FROM product ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];

        foreach ($result as $row){
            $product = new Product($row['name'],$row['price'],$row['describes'],$row['producer']);
            $product->id = $row['id'];
            $products [] = $product;
        }
        return $products;
    }
}