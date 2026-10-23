<?php
$db = pdo();

$error = '';
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $q = $_POST['question'];

    $labels = array_values(array: array_map(callback: 'trim', array: $_POST['options'] ?? []));

    print_r($labels);

    if ($q === '' || count(value: $labels) < 2) {

        $error = "Informe a pergunta e pelo menos 2 opcões...";
    } else {

        $db->beginTransaction();

        try {

            $st = $db->prepare("INSERT INTO polls(question) VALUES (?)");
            $st->execute(params: [$q]);
            $pid = (int)$db->lastInsertId();
            $st = $db->prepare(query: "INSERT INTO poll_options (poll_id, label)");
            } catch (Throwable $e) {

            $db->rollBack();
            $error = 'Erro ao criar enquete...';
        }
    }
}


?>

<div class="card">
    <div class="card-body">
        <form class="vstack gap-2" method="POST">
            <div class="form-floating">
                <input
                    type="text"
                    class="form-control"
                    id="question"
                    name="question"
                    placeholder="Pergunta"
                    required>
                <label for="question">Pergunta</label>
            </div>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <input type="text" name="options[]" placeholder="Opcão <?= $i ?>">
            <?php endfor; ?>
            <button class="btn btn-primary mt-2" type="submit">Criar enquete</button>

        </form>
    </div>
</div>



<div class="mt-3">
    <a href="resultados.php" class="btn btn-primary btn-sm">Ver resultados</a>
    <a href="index.php" class="btn btn-outline-secondary btn-sm">Home</a>
</div>