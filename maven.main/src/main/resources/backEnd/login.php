<?php
session_start();
include('../../java/app/Aplicacao.java');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}

    if(isset($_POST["minasvalley.postgres.database.azure.com//usuario/:id"])){
        
        $nome = $_POST["nomelog"];
        $senha = $_POST["senhalog"];

        require_once 'dbconnection.php';
        require_once 'functions.php';

        if(inputVazioLogin($nome, $senha) !== false){

            header("location: ../resources/frontEnd/signup.php?error=inputvazio");
            exit();
        }
        
        loginUsuario($conn, $nome, $senha);

    }else{

        header("location: ../resources/frontEnd/login.php");
        exit();
    }