
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// ASSUNTO DA AULA

$id = 2;


$stmt = $conn->prepare("SELECT * FROM pessoas WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

//$data = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($itens);
