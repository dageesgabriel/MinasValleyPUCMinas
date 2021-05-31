<?php

if(isset($_POST["criar"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $data = $_POST["data"];
    $senha = $_POST["senha"];
       

    require_once 'dbconnection.php';
    require_once 'functions.php';

    if(inputVazio($nome, $email, $usuario, $data, $senha) !== false){

        header("location: ../resources/frontEnd/signup.php?error=inputvazio");
        exit();
    }

    if(usuarioInvalido($usuario) !== false){

        header("location: ../resources/frontEnd/signup.php?error=usuarioinvalido");
        exit();
    }

    if(emailInvalido($email) !== false){

        header("location: ../resources/frontEnd/signup.php?error=emailinvalido");
        exit();
    }
    
    if(senhaNaoBate($senha, $senhaconf) !== false){

        header("location: ../resources/frontEnd/signup.php?error=senhanaobate");
        exit();
    }

    if(usuarioExiste($conn, $usuario, $email) !== false){

        header("location: ../resources/frontEnd/signup.php?error=usuariojaexiste");
        exit();
    }

    criarUsuario($conn, $nome, $usuario, $email, $senha);

    
}else{

    header("location: ../resources/frontEnd/login.php");
    exit();
}
?>