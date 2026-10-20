<?php
include_once("db.php");
include_once("dao/CarDAO.php");

$carDao = new CarDAO($conn);

$id = $_POST["id"];
$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

$newCar = new Car($id, $brand, $color, $km);


$carDao->create($newCar);

header("location: index.php");
