<?php

    $conexao = pg_connect("host=minasvalley.postgres.database.azure.com port=5432 dbname=minasvalley user=adm@minasvalley password=valleyValley$");

     $usu_nome = isset($_POST['usu_name']) ? $_POST['usu_nome'] : '',
     $usu_email = isset($_POST['usu_email']) ? $_POST['usu_email'] : '',
     $usu_usuario = isset($_POST['usu_usuario']) ? $_POST['usu_usuario'] : '',
     $usu_senha = isset($_POST['usu_senha']) ? $_POST['usu_senha'] : '',

     $sql = "INSERT INTO usuario (usu_nome, usu_email, usu_usuario, usu_senha) VALUES ('$usu_nome', '$usu_email', '$usu_usuario', '$usu_senha');";

     $res = pg_exec($conexao, $sql);
?>