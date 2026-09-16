<?php
$host = "localhost";
$user = "root";
$pass = "";
//ERRO INTENCIONAL, POREM O IF NAO FUNCIONOU PARA TRATAMENTO DO ERRO, DEPOIS VEJO ISSO
$db = "ADD";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . mysqli_connect_error();
}
