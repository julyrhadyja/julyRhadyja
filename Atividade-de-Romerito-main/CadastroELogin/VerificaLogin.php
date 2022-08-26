<?php
    $senha = null;
    $email = null;
    if(isset($_POST['senha']) && isset($_POST['email'])){
        $senha = $_POST['senha'];
        $email = $_POST['email'];
    };

    $conexaoBD = new SQLite3('banco.db');
    $lista = $conexaoBD->query('SELECT * FROM usuarios');
    $conf = [
        "email" => false,
        "senha" => false
    ];
    while($list = $lista->fetchArray()){
        if($email == $list['email']){
            $conf['email'] = true;
        }
        if($senha == $list['senha']){
            $conf['senha'] = true;
        }
    }
    if($conf['email'] == true && $conf['senha'] == true){
        echo "<h1>Login Feito com sucesso, você será redirecionado</h1>"; 
        sleep(5);
        header("location: Romerflix.php");
    }
    else{
        echo "<h1>Email ou senha errados! Você será redirecionado para página de login.</h1>";
        sleep(5);
        header("location: Logar.php");
    }
?>