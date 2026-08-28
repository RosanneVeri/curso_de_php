<?php
class Humano
{
    public $idade = 29;

    public function falar()
    {
        echo "Olá mundo! <br>";
    }

    private function gritar()
    {
        echo "PHP É MUITO BOM! <br>";
    }

    public function acessarGritar()
    {
        $this->gritar();
    }

    protected function falarBaixinho()
    {
        echo "Lalalala <br>";
    }

    public function acessaFalarBaixinho()
    {
        $this->falarBaixinho();
    }
}

class Programador extends Humano {}


$ze = new Humano;

echo "Esse e o ze<br>";
$ze->falar();
$ze->acessarGritar();
$ze->acessaFalarBaixinho();
echo $ze->idade . "<br>";

echo "<br><br>";

$joao = new Programador;

echo "Esse e o joao <br>";
$joao->falar();
$joao->acessarGritar();
$joao->acessaFalarBaixinho();
echo $joao->idade . "<br>";
