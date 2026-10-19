<?php
include_once("db.php");
include_once("dao/CarDAO.php");

$carDao = new CarDAO($conn);

$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

$newCar = new Car($brand, $color, $km);


$carDao->create($newCar);

header("location: index.php");
