<?php

$arquivoTarefas = 'tarefa.json';
$arquivoConcluidas = 'tarefa_concluidas.json';



// TAREFAS ABERTAS

if (file_exists($arquivoTarefas)) {

    $json = file_get_contents($arquivoTarefas);
    $tarefas = json_decode($json, true);
} else {

    $tarefas = [];
    file_put_contents($arquivoTarefas, json_encode($tarefas, JSON_PRETTY_PRINT));
}

//TAREFAS CONCLUIDAS

if (file_exists($arquivoConcluidas)) {

    $json = file_get_contents($arquivoConcluidas);
    $tarefasConcluidas = json_decode($json, true);
} else {

    $tarefasConcluidas = [];
    file_put_contents($arquivoConcluidas, json_encode($tarefasConcluidas, JSON_PRETTY_PRINT));
}

if (isset($_POST['tarefa']) && trim($_POST['tarefa']) !== '') {
    $tarefas[] = trim($_POST['tarefa']);
    $json = json_encode($tarefas, JSON_PRETTY_PRINT);
    file_put_contents($arquivoTarefas, $json);
    header('Location: index.php');
    exit;
}

//logica para concluir tarefa
if (isset($_POST['concluir'])) {
    $indice = $_POST['concluir'];
    $tarefaconcluida = $tarefas[$indice];
    $tarefasConcluidas[] = $tarefaconcluida;
    unset($tarefas[$indice]);
    $tarefas = array_values($tarefas);
    file_put_contents($arquivoTarefas, json_encode($tarefas, JSON_PRETTY_PRINT));

    file_put_contents($arquivoConcluidas, json_encode($tarefasConcluidas, JSON_PRETTY_PRINT));
    header('Location: index.php');
    exit;
}

//logica para excluir tarefa
if (isset($_POST['excluir'])) {

    $indice = $_POST['excluir'];
    //$tarefaExcluida = $_POST[$indice];
    unset($tarefas[$indice]);
    $tarefas = array_values($tarefas);
    file_put_contents($arquivoTarefas, json_encode($tarefas, JSON_PRETTY_PRINT));
}

//logica para pegar a tarefa atual e renderizar
if (isset($_POST['editar'])) {
    $indice = $_POST['editar'];
    $tarefaAtual = $tarefas[$indice];
}

//logica para salvar edicao
if (isset($_POST['salvarEdicao'])) {
    $indice = $_POST['indice'];
    $novaTarefa = trim($_POST['novaTarefa']);

    if ($novaTarefa !== "") {
        $tarefas[$indice] = $novaTarefa;
        file_put_contents($arquivoTarefas, json_encode($tarefas, JSON_PRETTY_PRINT));
    }
}


if (isset($_POST['tarefas'])) {
    $tarefaMarcadas = $_POST['tarefas'];
    $totalMarcados = count($tarefaMarcadas);
    echo "Total de tarefas: $totalMarcados";
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
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <h3>Adicionar Tarefas</h3>
        <div>
            <input type="text" name="tarefa" placeholder="Digite sua tarefa">
            <button type="submit" name="Enviar">Enviar</button>
        </div>
        <?php if (isset($tarefaAtual)): ?>
            <h3>Editar tarefa</h3>
            <input type="text" name="novaTarefa" value="<?= htmlspecialchars($tarefaAtual) ?>">
            <input type="hidden" name="indice" value="<?= $indice ?>">
            <button type="submit" name="salvarEdicao">Salvar</button>

        <?php endif ?>

        <h3>Tarefas em aberto</h3>
        <?php if (count($tarefas) > 0): ?>
            <div>
                <ol>
                    <?php foreach ($tarefas as $indice => $tarefa): ?>

                        <div>

                            <li><?= $tarefa ?></li>
                            <button type=" submit" name="concluir" value="<?= $indice ?>">Concluir</button>
                            <button type="submit" name="excluir" value="<?= $indice ?>">Excluir</button>
                            <button type="submit" name="editar" value="<?= $indice ?>">Editar</button>

                        </div>


                    <?php endforeach ?>
                </ol>
            <?php else: ?>
                <p>Não há tarefas em aberto</p>
            <?php endif ?>
            </div>
            <div>
                <h3>Tarefas em concluídas</h3>
                <?php if (count($tarefasConcluidas) > 0): ?>
                    <ol>
                        <?php foreach ($tarefasConcluidas as $tarefa): ?>

                            <div>

                                <li><?= $tarefa ?>
                                </li>
                            </div>

                        <?php endforeach ?>
            </div>

            </ol>
        <?php else: ?>
            <p> Não há tarefas concluídas.</p>

        <?php endif; ?>



    </form>


</body>

</html>