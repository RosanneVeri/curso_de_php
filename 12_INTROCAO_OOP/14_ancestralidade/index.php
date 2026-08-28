<?php
class Humano {}

class  Animal {}

class Professor extends Humano {}


$marcos = new Humano;

$turca = new Animal;

$pedro = new Professor;


if ($marcos instanceof Humano) {
    echo "Marcos é um Humano<br>";
} else {
    echo "Marcos não é um humano<br>";
}
if ($marcos instanceof Professor) {
    echo "Marcos é um professor<br>";
} else {
    echo "Marcos não é um professor<br>";
}

if ($pedro instanceof Humano) {
    echo "Pedro é um humano<br>";
} else {
    echo "A Pedro não é um Humano<br>";
}

if ($turca instanceof Humano) {
    echo "Turca é um humano<br>";
} else {
    echo "A Turca não é um Humano<br>";
}

if ($turca instanceof Professor) {
    echo "Turca é um professor<br>";
} else {
    echo "A Turca não é um professor<br>";
}
