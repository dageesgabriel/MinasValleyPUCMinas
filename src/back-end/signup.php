<?php

include_once('dbconnection.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $senhaconf = $_POST["senhaconf"]; 

    private $conexao;
    $this->conexao = ConectaBanco::conexao();
    
    $stmt = $this->conexao->prepare("INSERT INTO usuario (usu_nome, usu_email, usu_usuario, usu_senha) VALUES (nome, email, usuario, senha>)");
     
        $stmt->blindParam(1, $this->usu_nome);
        $stmt->blindParam(1, $this->usu_email);
        $stmt->blindParam(1, $this->usu_usuario);
        $stmt->blindParam(1, $this->usu_senha);

        stmt->execute();

?>