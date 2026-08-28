<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul style="margin-top: 40px; margin-bottom:40px;">
        <h3>Conteúdo HTML</h3>
        <li>
            <pre>A ideia principal é que eu posso acessar métodos de uma classe sem que ela esteja instanciada;</pre>
        </li>
        <li>
            <pre> As classes abstratas nao podem ser instanciadas;<bR> Podemos ter metodos abstratos, que devem ser implementados obrigatoriamente se uma classe herdar a abstrata;
            </pre>

        </li>
        <br>
        <li>
            <pre>A palavra reservado tanto para classes como para métodos é <p><strong>abstract</strong></p><br>Exemplo:<br>abstract class ClasseAbstrata {}
            </pre>

        </li>


    </ul>


</body>

</html>

<?php


//pode instanciar classe 
abstract class Teste
{

    public static function testandoClasse()
    {

        echo "Este método é de uma classe abstrata <br>";
    }


    abstract public function testeAbs();
}

//nao se pode instanciar
//$t = new Teste;

Teste::testandoClasse();

class Nova extends Teste
{

    #[Override]

    public function testeAbs()
    {
        echo "Teste metodo abstrato <br>";
    }
}

$n =  new Nova;
$n->testeAbs();

?>