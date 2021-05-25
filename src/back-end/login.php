<?php 

    if(isset($_POST["logar"])){
        
        $nome = $_POST["nomelog"];
        $senha = $_POST["senhalog"];

        echo "Conectado com sucesso1";

        require_once 'dbconnection.php';

        echo "Conectado com sucesso1";

        require_once 'functions.php';

        echo "Conectado com sucesso1";

        if(inputVazioLogin($nome, $senha) !== false){

            header("location: ../front-end/signup.php?error=inputvazio");
            exit();
        }
        
        echo "Conectado com sucesso2";

        loginUsuario($conn, $nome, $senha);

    }else{

        header("location: ../front-end/login.php");
        exit();
    }