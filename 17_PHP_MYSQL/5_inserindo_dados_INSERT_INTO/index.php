<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

//ASSUNTO DA AULA
$table = "pessoas";
$nome = "Susanna Vieira";
$idade = 35;
$profissao = "Estagiaria";
$query = "INSERT INTO $table (nome, idade, profissao) VALUES ('$nome', '$idade', '$profissao')";
$conn->query($query);
$conn->close();
