<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inicializando PDO</h1>
    <ol>
        <li>Antes de usar PDO, é necessario checar se a lib está habilitada;</li>
        <li>Vamos checar no php.ini por duas linhas, e descomentar caso estajam: php_pdo e php_pdo_mysql</li>
    </ol>
</body>

</html>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

//$conn= new PDO("Mysql:host=");