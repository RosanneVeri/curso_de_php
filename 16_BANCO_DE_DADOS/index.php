<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol>
        <h1>Banco de dados Relacionais</h1>
        <li>
            O banco de dado relacional tem sua principal caracteristica trabalhar com tabelas;
        </li>
        <br>
        <li>
            Criando banco: CREATE DATABASE nomedobanco;
        </li>
        <br>
        <li>
            deletando banco: DROP DATABASE nomedobanco;
        </li>
        <br>
        <li>
            Criando tabelas. Ex: CREATE TABLE nome (coluna tipoDeDado, coluna2 tipoDeDado);
        </li>
        <br>
        <li>
            removendo tabelas. Ex: DROP TABLE nome;
        </li>
        <br>
        <li>
            ALTER TABLE tabela DROP coluna; ALTER TABLE tabela MODIFY COLUMN campo com a alteracão.Ex: ALTER TABLE carros MODIFY COLUMN descricao VARCHAR(500) => Aumentando o caracters;
        </li>
        <br>
        <li>
            Constraints são caracteristica que podem ser adicionadas na hora da criacao de uma tabela;
        </li>
        <br>
        <li>
            NOT NULL é uma constraint, nao permite que o dado adicionado a esta coluna seja vazio. nome VARCHAR(100) NOT NULL
        </li>
        <br>
        <li>
            UNIQUE é uma constraint, que garante que todos os valores da coluna que foi adicionado sejam únicos. Exemplo nome VARCHAR(100) UNIQUE, email VARCHAR(255) NOT NULL UNIQUE;
        </li>
        <br>
        <li>
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY;
        </li>
        <br>
        <li>
            SELECT colunas FROM tabela WHERE condicao;
        </li>
        <br>
        <li>
            SELECT * FROM tabela;
        </li>
        <br>
        <li>
            INSERT INTO tabela (coluna, coluna2) values (valor, valor2);
        </li>
        <br>
        <li>
            Com o ORDER BY é possivel ordenar o retorno com base em alguma coluna; (ASC) =>crescente (DESC) =>decrescente; Exemplo ORDER BY email ASC;
        </li>
        <br>
        <li>
            UPDATE tabela SET coluna1= valor1 where condicao;
        </li>
        <br>
        <li>
            Deletando com condicao: DELETE FROM tabela WHERE condicao. Ex: DELETE FROM carros WHERE id = 1;
        </li>
        <br>
        <li>
            Criando usuarios com privilegios. CREATE USER 'usuario'@'localhost' IDENTIFIED BY 'senha'; GRANT ALL PRIVILEGES ON * . * TO 'usuario'@'localhost';FLUSH PRIVILEGES;
        </li>
        <br>
        <li>
            Trazer todos os usuários: SELECT * FROM mysql.user;
        </li>
        <br>
    </ol>



</body>

</html>


<?php
