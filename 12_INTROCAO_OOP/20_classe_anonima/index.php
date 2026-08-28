<?php


$pessoa = new class() {
    public $nome = "Rosanne";

    public function dizerNome()
    {
        echo "Olá meu nome é $this->nome <br>";
    }
    //fecha com ponto e virgula
};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();
