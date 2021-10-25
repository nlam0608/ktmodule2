<?php

namespace App\controller;
use App\model\productModel;

class productController
{
    private $productModel;


    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once "app/view/product/list.php";
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        header("location: index.php?page=default");
    }
//    public function delete($id)
//    {
//        if ($_SERVER["REQUEST_METHOD"] == "GET") {
//            $product = $this->productModel->getById($id);
//            include "src/Views/product/delete.php";
//        } else {
//            $this->productModel->delete($id);
//            header('location:index.php');
//        }
//    }

    public function detail($id)
    {
        $product = $this->productModel->getById();

    }


    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once "app/view/product/create.php";
        }else{
            $data = [
                'name' => $_POST['name'],
                'category' => $_POST['category'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'information' => $_POST['information']
            ];
            $this->productModel->store($data);
            header("location: index.php?page=default");
        }
    }

}