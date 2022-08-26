<?php
    $usuario = null;
    $senha = null;
    $email = null;
    if(isset($_POST['usuario']) && isset($_POST['senha']) && isset($_POST['email'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
    };

    $conexaoBD = new SQLite3('banco.db');
    $sql = 'INSERT INTO usuarios values("'.$email.'","'.$usuario.'","'.$senha.'")';
	$conexaoBD->exec($sql);
    $lista = $conexaoBD->query('SELECT * FROM usuarios');
    $conf = [
        "usuario" => false,
        "email" => false,
        "senha" => false
    ];
    while($list = $lista->fetchArray()){
        if($usuario == $list['usuario']){
            $conf['usuario'] = true;
        }
        if($email == $list['email']){
            $conf['email'] = true;
        }
        if($senha == $list['senha']){
            $conf['senha'] = true;
        }
    }
    if($conf['usuario'] == true && $conf['email'] == true && $conf['senha'] == true){
        header("location: Logar.php");
    }
?>