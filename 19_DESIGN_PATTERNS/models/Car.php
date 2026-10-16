<?php

class Car
{
    private $id;
    private $color;
    private $brand;
    private $km;

    
    public function getId() {
        return $this->$id;

    }
    public function setId() {
        return $this->$id;
    }


    public function getColor() {
        return $this->$color;

    }
    public function setColor() {
        return $this->$color;
    }


    public function getBrand() {
        return $this->$brand;

    }
    public function setBrand() {
        return $this->$brand;
    }


    public function getKm() {
        return $this->$km;
    }
    public function setKm() {
        return $this->$km;
    }
    
}

interface CarDAOInterface {
        public function create(Car $car); 
        public function findAll(); 
    }
   