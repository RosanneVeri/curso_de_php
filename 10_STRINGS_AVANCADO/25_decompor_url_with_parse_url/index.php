<?php


$url = "https://google.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);


echo "<br><br>";
echo $arrayUrl["host"];
echo "<br>";

$url2 = "https://www.adatech.com.br/?busca=php";

$arrayUrl2 = parse_url($url2);
echo "<br><br>";
print_r($arrayUrl2);
echo "<br><br>";
echo $arrayUrl2["host"];
echo "<br><br>";
echo $arrayUrl2["query"];
echo "<br><br>";


$url3 = "https://www.facebook.com/usuarios/rosanneveri?id=256&nome=Rosanne";
$arrayUrl3 = parse_url($url3);
echo $arrayUrl3["host"];
echo "<br><br>";
print_r($arrayUrl3);
echo "<br><br>";
echo $arrayUrl3["query"];
