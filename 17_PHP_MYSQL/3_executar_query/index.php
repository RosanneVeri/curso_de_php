<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA
$sql = "SELECT * FROM pessoas ";

$result = $conn->query($sql);

print_r($result);

$conn->close();
