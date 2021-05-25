<?php

if(isset($_POST["criar"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $senhaconf = $_POST["senhaconf"];   

    require_once 'dbconnection.php';
    require_once 'functions.php';

    if(inputVazio($nome, $email, $usuario, $senha, $senhaconf) !== false){

        header("location: ../front-end/signup.php?error=inputvazio");
        exit();
    }

    if(usuarioInvalido($usuario) !== false){

        header("location: ../front-end/signup.php?error=usuarioinvalido");
        exit();
    }

    if(emailInvalido($email) !== false){

        header("location: ../front-end/signup.php?error=emailinvalido");
        exit();
    }
    
    if(senhaNaoBate($senha, $senhaconf) !== false){

        header("location: ../front-end/signup.php?error=senhanaobate");
        exit();
    }

    if(usuarioExiste($conn, $usuario, $email) !== false){

        header("location: ../front-end/signup.php?error=usuariojaexiste");
        exit();
    }

    echo "Conectado com sucesso";
    criarUsuario($conn, $nome, $usuario, $email, $senha);
    echo "Conectado com sucesso";

    
}else{

    header("location: ../front-end/login.php");
    exit();
}
?>