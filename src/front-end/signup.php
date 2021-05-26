<?php

include_once('Usuario.php');

$usuario = new Usuario();

$usuario->usu_nome = gabriel;
$usuario->usu_email = gabriel@gmail.com;
$usuario->usu_usuario = gabriel;
$usuario->usu_senha = gabriel;

$usuario->salvar();

echo $usuario->id;