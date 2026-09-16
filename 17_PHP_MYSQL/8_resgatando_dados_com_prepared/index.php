<?php
//prepared statement serve para evitar sql inject trazendo mais seguranca na aplicacao
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

//ASSUNTO DA AULA inserindo dados no banco com prepared
$id = 4;

$stmt = $conn->prepare("SELECT * FROM pessoas WHERE id > ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);