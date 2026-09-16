<?php

use LDAP\Result;

$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

//CRIANDO TABELAS

/* $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$result = $conn->query($q);

//retorna 1 true pq criou a tabela
print_r($result);
$conn->close(); */

//DELETANDO TABELAS
$q = "DROP TABLE teste";
$conn ->query($q);
$conn->close();
