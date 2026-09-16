<?php
//prepared statement serve para evitar sql inject trazendo mais seguranca na aplicacao
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

//ASSUNTO DA AULA inserindo dados no banco com prepared
$nome = "Alexandre";
$idade = 25;
$profissao = "desenvolvedor";

$stmt = $conn->prepare("INSERT INTO pessoas (nome, idade, profissao) VALUES (?,?,?)");
$stmt->bind_param("sis", $nome, $idade, $profissao); //s = string, i = integer,  d = double

$stmt->execute();
