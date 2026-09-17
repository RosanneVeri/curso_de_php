<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

//ASSUNTO DA AULA
$q = "SELECT * FROM pessoas";

$result = $conn->query($q);
$conn->close();

//UM RESULTADO
//$pessoas1 = $result->fetch_assoc();

//TODOS OS RESULTADOS

$pessoas = $result->fetch_all();

//print_r($pessoas1);
print_r($pessoas);
