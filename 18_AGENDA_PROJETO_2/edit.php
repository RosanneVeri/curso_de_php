<?php
include_once("templates/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="edit-form" action="<?= $BASE_URL ?>process.php" method="POST">
        <input type="hidden" name="type" value="edit">            
        
        <h2 id="main-title">Editar contato: </h2>

        <div class="container">

            
            <div class="form-group">
                <label for="name" class="bold">Nome do contato</label>
                <input type="text" class="form-control " id="name" value="<?= $contact["name"] ?>" placeholder ="Digite o nome do contato" required>
            </div>

            <br>

            <div class="form-group">
                <label for="name" class="bold">Telefone do contato</label>
                <input type="text" class="form-control" id="phone" value="<?= $contact["phone"] ?>" placeholder ="Digite o telefone" required>
                
            </div>

            <br>

            <div class="form-group">
                <label for="name" class="bold">Observacões</label>
                <textarea type="text" class="form-control" id="observations" placeholder ="Insira a observacão" rows="3" required><?= $contact["observations"] ?></textarea>
            </div>

            <br>

            <button class="btn btn-primary"> Atualizar</button>
        </div>
    </form>

</body>

</html>
<?php
//footer
include_once("templates/footer.php");
?>