<?php

class Car
{
    
    private  $color;
    private  $brand;
    private  $km;

    public function __construct($brand, $color, $km )
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->km = $km;
    }
   
    public function getColor() {
        return $this->color;

    }
    public function setColor($color) {
        $this->color = $color;
    }


    public function getBrand() {
        return $this->brand;

    }
    public function setBrand($brand) {
        $this->brand = $brand;
    }


    public function getKm() {
        return $this->km;
    }
    public function setKm($km) {
    $this->km = intval($km); 
    }
    
}

interface CarDAOInterface {
        public function create(Car $car); 
        public function findAll(); 
    }
   