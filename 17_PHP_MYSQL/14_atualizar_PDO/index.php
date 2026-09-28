
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// ASSUNTO DA AULA

$id = 2;
$nome = "Lara";
$idade = 25;
$profissao = "Estudante";

$stmt = $conn->prepare("UPDATE pessoas SET nome = :nome, idade = :idade, profissao = :profissao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":idade", $idade);
$stmt->bindParam(":profissao", $profissao);
$stmt->execute();
