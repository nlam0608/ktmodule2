<?php

namespace App\model;


class product
{
    private $code_id;
    private $name;
    private $category;
    private $price;
    private $quantity;
    private $date_create;
    private $information;

    /**
     * @param $code_id
     * @param $name
     * @param $category
     * @param $price
     * @param $quantity
     * @param $date_create
     * @param $information
     */
    public function __construct($code_id, $name, $category, $price, $quantity, $date_create, $information)
    {
        $this->code_id = $code_id;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->date_create = $date_create;
        $this->information = $information;
    }

    /**
     * @return mixed
     */
    public function getCodeId()
    {
        return $this->code_id;
    }

    /**
     * @param mixed $code_id
     */
    public function setCodeId($code_id)
    {
        $this->code_id = $code_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getDateCreate()
    {
        return $this->date_create;
    }

    /**
     * @param mixed $date_create
     */
    public function setDateCreate($date_create)
    {
        $this->date_create = $date_create;
    }

    /**
     * @return mixed
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param mixed $information
     */
    public function setInformation($information)
    {
        $this->information = $information;
    }


}