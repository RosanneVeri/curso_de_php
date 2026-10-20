<?php

class Car
{
    private $id;
    private  $color;
    private  $brand;
    private  $km;

    public function __construct($id, $brand, $color, $km)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->color = $color;
        $this->km = $km;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }


    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }


    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }


    public function getKm()
    {
        return $this->km;
    }
    public function setKm($km)
    {
        $this->km = intval($km);
    }
}

interface CarDAOInterface
{
    public function create(Car $car);
    public function findAll();
}
