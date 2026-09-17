<?php
//prepared statement serve para evitar sql inject trazendo mais seguranca na aplicacao
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

//ASSUNTO DA AULA trazer um registro com metodo correto:
$id = 6;

$stmt = $conn->prepare("SELECT * FROM pessoas WHERE id = ?");
//$stmt = $conn->prepare("SELECT * FROM pessoas"); tira o prepare e o bind  para trazer o primeiro com fetch_row

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$item = $result->fetch_row();

print_r($item);

$conn->close();
