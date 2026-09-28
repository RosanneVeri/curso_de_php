
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// ASSUNTO DA AULA

$stmt = $conn->prepare("INSERT INTO pessoas (nome, idade, profissao) VALUES (:nome, :idade, :profissao)");

$nome = "Lara";
$idade = 25;
$profissao = "Estudante";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":idade", $idade);
$stmt->bindParam(":profissao", $profissao);
$stmt->execute();
