<?php

namespace Model;

class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function create($customer)
    {
        $sql = "INSERT INTO customers(name, email, address) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        return $statement->execute();
    }


    public function getAll()
    {
        $sql = "SELECT * FROM customers";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        // var_dump($result);
        $cutomers = [];
        foreach ($result as $row) {
            $cutomer = new Customer($row['name'], $row['email'], $row['address']);
            $cutomer->id = $row['id'];
            $cutomers[] = $cutomer;
        }
        return $cutomers;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM customers WHERE id = ? ";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $customer = new Customer($row['name'], $row['email'], $row['address']);
        $customer->id = $row['id'];
        return $customer;
    }


    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }


    public function update($id, $customer)
    {
        $sql = "UPDATE customers SET name = ?, email = ?, address = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }
}
