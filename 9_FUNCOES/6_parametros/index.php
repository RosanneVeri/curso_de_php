<?php
function velocidadeMaxima($vel)
{
    if (is_int($vel)) {

        echo "O carro atinge a velocidade maxima de $vel km por hora!<br>";
    } else {
        echo "Por favor, passe um número inteiro <br>";
    }
}


//Quando a funcao exige parametros os mesmos são obrigatorios;
//velocidadeMaxima();

velocidadeMaxima(200);

echo "teste continuando <br>";

$velocidade = 125;

velocidadeMAxima($velocidade);

//php ignora parametro desnecessario
velocidadeMAxima(250, "teste");

//mais parametros

function descreverAnimal($nome, $raca)
{
    echo "O nome do animal é $nome e a raca é $raca <BR>";
}
descreverAnimal("Bob", "vira lata");
descreverAnimal("Shark", "Pastor Alemão");
descreverAnimal("Shakira", "Poodle");
