<?php 

    if(isset($_POST["logar"])){
        
        $nome = $_POST["nomelog"];
        $senha = $_POST["senhalog"];

        require_once 'dbconnection.php';
        require_once 'functions.php';

        if(inputVazioLogin($nome, $senha) !== false){

            header("location: ../front-end/signup.php?error=inputvazio");
            exit();
        }
        
        loginUsuario($conn, $nome, $senha);

    }else{

        header("location: ../front-end/login.php");
        exit();
    }