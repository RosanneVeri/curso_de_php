<?php

function soma($a, $b) //pegam os parametros passados e contam quantos parametros passados tambem

{
    print_r(func_get_args());
    echo "<br>";
    echo func_num_args() . "<br>";
}
soma(2, 4);
