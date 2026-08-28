<?php


interface Carateristicas
{

    //criando constantes
    const nome = "Pedro";
    public function falar();
}

class Humano implements Carateristicas
{

    public $idade = 29;
    public function falar()
    {
        echo "Humano falando ....<br>";
    }
    public function dizerNome()
    {
        //acessando contantes
        echo "Meu nome é  " . self::nome . "<br>";
    }
}

$pedro = new Humano;
$pedro->falar();
$pedro->dizerNome();
