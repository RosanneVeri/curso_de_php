<?php
$ranking = [
    'Matheus' => 93,
    'Jose' => 38,
    'Miriam' => 78,
    'Joaquina' => 58,
    'Josue' => 55
];

$ranking1 = [
    'Matheus' => 93,
    'Jose' => 38,
    'Miriam' => 78,
    'Joaquina' => 58,
    'Josue' => 55
];

arsort($ranking);
asort($ranking1);
//print_r($ranking);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Ranking</h3>
    <br>
    <ul>
        <?php foreach ($ranking1 as $nome => $valor) { ?>
            <li><?php echo "$nome com $valor pontos"; ?></li>
        <?php } ?>
    </ul>

    <h3>Ranking</h3>
    <br>
    <ol>
        <?php foreach ($ranking as $nome => $valor) { ?>
            <li><?= $nome ?> com <?= $valor  ?> pontos</li>
        <?php } ?>
    </ol>

</body>

</html>