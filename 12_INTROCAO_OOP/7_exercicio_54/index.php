<?php
class Pessoa
{
    public $nome;
    public $idade;

    function andar()
    {
        echo "Estou andando...";
    }
    function falar()
    {
        echo "Estou falando...";
    }
}
$maria = new Pessoa;
$maria->nome = "Maria";
$maria->idade = 33;
echo $maria->nome;
echo "<br>";
echo $maria->idade;

$pedro = new Pessoa;

$pedro->andar();
$pedro->falar();