<ul>
    <li>class_exists() => verifica se uma classe existe;</li>
    <li>get_class_methods() => verifica os metodos de uma classe;</li>
    <li>get_class_var => mapeamento das propriedades de uma classe;</li>
</ul>

<?php

class Humano
{


    public int $idade;
    public string  $nome;
    public string $profissao;


    public function falar() {}
    public function andar() {}
}
if (class_exists("Humano")) {
    echo "A classe existe<br>";
}
if (class_exists("Cachorro")) {
    echo "A classe existe";
} else {
    echo "a classe não existe<br>";
}
print_r(get_class_vars("Humano"));

echo "<br>";

print_r(get_class_methods("Humano"));
echo "<br>";





















?>