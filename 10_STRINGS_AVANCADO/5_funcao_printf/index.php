<?php
$nome = "Rosanne";

// %s -> string

printf("o nome é %s <br>", $nome);

$n = 10;
// %d ->int

printf("o numero é %d e o outro numero é %d <br>", $n, 150);

$n1 = 1.25;

// %f,  %.2f(duas casas), %.1f(uma casa decimal)

printf("o numero é %s <br>", number_format($n1, 2, '.'));
printf("o numero é %f<br>", $n1);
printf("o numero é %.2f<br>", $n1);
