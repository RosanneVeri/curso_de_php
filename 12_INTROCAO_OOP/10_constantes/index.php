<?php
class Humano
{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;
    // metodo usa o self
    function mostrarConstante()
    {
        echo self::BRACOS . " bracos <br>";
    }
}
$rose = new Humano;

//prpriedades usa ::
echo $rose::OLHOS . " olhos <bR>";

$rose->mostrarConstante();
