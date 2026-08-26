<?php
class Pessoa
{
    public string $nome;

    function falar()
    {
        echo "Olá pessoal";
    }
}
$matheus = new pessoa();

$matheus->nome = "Matheus";
echo $matheus->nome;
echo "<br>";
$matheus->falar();
