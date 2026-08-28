<?php

class Humano
{
    public String  $nome;
    public Int $peso;
    public float $altura;

    public function falar(): string
    {
        return "Falando.... lalalala!";
    }
}


class Professor extends Humano
{
    public $areaEnsino = 'Matemática';

    protected function lecionar(): string
    {
        return "Estou lecionando ";
    }
    public function acessaLecionar()
    {

        return $this->lecionar() . " " . $this->areaEnsino;
    }
}

$maria = new Professor;
echo $maria->nome = "Maria";
echo "<br>";
echo $maria->altura = 1.78;
echo "<br>";
echo $maria->peso = 85;
echo "<br>";
echo $maria->areaEnsino;
echo "<br>";
echo $maria->acessaLecionar();
echo "<br>";
echo "Maria " . $maria->falar();
