<?php
//prepared statement serve para evitar sql inject trazendo mais seguranca na aplicacao
//:id ->PDO ? -> MYSQLI
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$conn = new mysqli($host, $user, $pass, $db);

//ASSUNTO DA AULA trazer um registro com metodo correto:
$id = 6;

$stmt = $conn->prepare("UPDATE pessoas SET nomme = ?, idade = ?, profissao = ? WHERE id = ?");

$nome = "Anna";
$idade = 21;
$profissao = "Estagiaria";

$stmt->bind_param("sisi", $nome, $idade, $profissao, $id); //primeiro parametro descricao de tipo s = string i = integer

$stmt->execute();
if ($stmt->error) {
    echo "Erro: " . $stmt->error;

} elseif ($stmt->affected_rows === 0) {
    echo "Aviso: Nenhuma linha foi alterada. O ID " . $id . " existe no banco?";
} else {
    echo "Sucesso! " . $stmt->affected_rows . " linha(s) atualizada(s).";
}
