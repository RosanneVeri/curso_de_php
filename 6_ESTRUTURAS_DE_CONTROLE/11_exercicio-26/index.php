<?php
$velocidade = 100;
$velocidadeVia = 40;

if ($velocidade < $velocidadeVia) {
    echo "O motorista está na velocidade correta";
} else if ($velocidade == $velocidadeVia) {
    echo "Motorista tome cuidado perto da velocidade máxima!";
} else if ($velocidade > $velocidadeVia) {
    echo "Voce adquiriu um multa por excesso de velocidade";
}
