<?php

class Cachorro
{
    public $raca;
    public $nome;
    public $idade;

    function __construct($raca, $nome, $idade)
    {
        $this->raca = $raca;
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getAnimal()
    {
        return "O nome do cachorro é $this->nome, ele tem a raca  $this->raca, e tem a idade de $this->idade anos. <br>";
    }
}
$dog = new Cachorro("Pastor Alemão", "Dog", 2);


echo $dog->getAnimal() . "<br>";

$nome = "Pitbull";
$raca = "Tubarao";
$idade = 3;

$tubarao = new Cachorro($nome, $raca, $idade);

echo $tubarao->getAnimal();
