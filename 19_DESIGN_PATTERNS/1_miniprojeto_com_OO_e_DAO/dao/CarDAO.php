<?php

include_once("models/Car.php");

class CarDAO implements CarDAOInterface
{
    private $conn;
    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }



    public function findAll()
    {
        $cars = [];

        $stmt = $this->conn->prepare("SELECT * FROM car");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $car) {
            $id = $car["id"];
            $brand = $car["brand"];
            $color = $car["color"];
            $km = $car["km"];

            $car = new Car($id, $brand, $color, $km);
            $cars[] = $car;
        }

        return $cars;
    }
    public function create(Car $car)
    {

        $stmt = $this->conn->prepare("INSERT INTO car(brand, km, color) VALUES (:brand, :km, :color)");

        $brand = $car->getBrand();
        $km = $car->getKm();
        $color = $car->getColor();

        $stmt->bindParam(":brand", $brand);
        $stmt->bindParam(":km", $km);
        $stmt->bindParam(":color", $color);

        $stmt->execute();
    }
}
