<?php

//mok
$usuario = [
    'nome' => 'Rosanne',
    'idade' => 35,
    'profissao' => 'Estágiaria em desenvolvimento de software',
];

if ($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario["profissao"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="nome" placeholder="Digite sua idade" value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="nome" placeholder="Digite sua profissao" value="<?= $profissao ?>">
        </div>
        <div>
            <input type="submit" value="Enviar seus dados">
        </div>
    </form>

</body>

</html>