<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'canaltiyoutube');
define('DB', 'login');

String driverName = "org.postgresql.Driver";                    
		String serverName = "localhost";
		String mydatabase = "MinasValley";
		int porta = 5432;
		String url = "jdbc:postgresql://" + serverName + ":" + porta +"/" + mydatabase;
		String username = "ti2cc";
		String password = "ti@cc";
		boolean status = false;

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');