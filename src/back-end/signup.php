<?php

include(‘dbconnection.php’);
$minhaConexao = new Conexao();
$minhaConexao->open();
$minhaConexao->statusCon();

if(isset($_POST["criar"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $senhaconf = $_POST["senhaconf"];   

    require_once 'functions.php';

    criarUsuario($nome, $email, $usuario, $senha);
    
}else{

    header("location: ../front-end/login.php");
    exit();
}

$minhaConexao->close();

?>