<?php
$a = 10;
$b = 15;
$c ="Deu certo ,entrou no if";


//condicao verdadeira
if (5 > 2) {
    echo "deu certo entrou no if 1<br>";
}

//condicao falsa
if (2 >= 5) {
    echo "não vai entrar no if, pq a condicao e false!1<br>";
}

//utilizar op. logico
if ((2 >= 5) && 1) {
   echo "deu certo entrou no if 2<br>";
}

if (!(2 >= 5) && 1) {
    echo "deu certo entrou no if 3<br>";
}

if(10>5){
    echo $c;
}