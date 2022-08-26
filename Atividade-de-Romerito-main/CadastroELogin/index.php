<?php
    //Logo na Primeira página o sistema será responsável por criar o banco
    //de dados, caso ele não exista
    $conexao = new SQLite3('banco.db');

    $comandoSQL = 'CREATE TABLE IF NOT EXISTS usuarios(email VARCHAR(100), usuario VARCHAR(100), senha VARCHAR(100))';
    $conexao->exec($comandoSQL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login RomerFlix</title>
</head>
<body>
    <h1>RomerFlix</h1>
    <a href="Logar.php">Login</a> <a href="Cadastrar.php">Cadastrar</a>
</body>
</html>