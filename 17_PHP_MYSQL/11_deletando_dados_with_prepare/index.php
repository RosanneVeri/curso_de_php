<?php
//prepared statement serve para evitar sql injection trazendo mais seguranca na aplicacao
//:id ->PDO ? -> MYSQLI
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

//ASSUNTO DA AULA deletando registro com where 
$nome = "alexandre";

$stmt = $conn->prepare("DELETE FROM pessoas WHERE nome = ?");
$stmt->bind_param("s", $nome);
$stmt->execute();
$conn->close();
