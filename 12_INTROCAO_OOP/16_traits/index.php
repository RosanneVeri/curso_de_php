<ul style="margin-top: 40px; margin-bottom:40px;">
    <h3>Conteúdo HTML</h3>
    <li>
        <pre> As traits permitem o uso do codigo sem heranca sem hierarquia de classe, ou seja, sem heranca;</pre>

    </li>
    <br>
    <li>
        <pre>Podemos assim utilizar os métodos da classe que for feita a trait. <br>Utilizamos a palavra use;<br> Exemplo:<br>
        class teste {<br>
        &emsp;&emsp;&emsp;use Classe Trait<br>
        }</pre>

    </li>


</ul>

<?php

trait Objeto
{
    public function teste()
    {
        echo "<p><strong>CONTEUDO PHP</strong></p> Testando trait de objeto <br>";
    }
}

trait Testando
{
    public $y = 10;

    public function traitTeste()
    {
        echo "Este método é da trair Testando <br>";
    }
}
class Central
{
    use Objeto;
    use Testando;
}

$x = new Central;

$x->teste();
echo "<br>";
$x->traitTeste();
echo "<br>";

echo $x->y;







?>