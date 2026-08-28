<?php
class Car
{
    public $rodas = 4;
    private $vidro = "Sem pelicula";
    protected $portas = 4;


    public function getVidro()
    {
        return $this->vidro;
    }
    
    public function getPortas()
    {
        return $this->portas;
    }
}


class Mecanico
{
    public function alterarRodas($obj)
    {

        $obj->rodas = 10;
    }
    public function colocarPelicula($carro, $pelicula)
    {
        $carro->vidro = $pelicula;
    }
}


$carro = new Car;
echo $carro->rodas . "<br>";

$joao = new Mecanico;
$joao->alterarRodas($carro);
echo $carro->rodas . "<br>";

//não pode acessar
//$joao->colocarPelicula($carro, "G20");

echo $carro->getvidro() . "<br>";
echo $carro->getPortas() . "<br>";
//nem o objeto acessa as propriedades privadas
//$carro->vidro = "G15";
//$carro->portas = "G15";
