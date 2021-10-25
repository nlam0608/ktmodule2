<?php

namespace App\model;


class productModel
{
    private $dbConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->dbConnect = $conn->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM product WHERE id = " . $id;
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id = " . $id;
        $this->dbConnect->query($sql);
    }

//    public function delete($id)
//    {
//        $sql = "DELETE FROM product WHERE id=$id";
//        $stmt = $this->dbConnect->prepare($sql);
//        $stmt->execute();
//    }

    public function store($data)
    {
        $sql = "INSERT INTO product(name, category, price, quantity, information) VALUES(?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['category']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['quantity']);
        $stmt->bindParam(5, $data['information']);
        $stmt->execute();
    }
}