<div class="card">
    <div class="card-body">
        <form class="vstack gap-2" method="post">
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