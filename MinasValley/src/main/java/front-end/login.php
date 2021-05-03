<!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../img/minasValley/logos/minasValleyFaviconNoFund.png">
<link rel="stylesheet" type="text/css" href="../styles/signup.css">
<link rel="stylesheet" type="text/css" href="../styles/general.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<header>
</header>

<body class="cannotSelect">

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="../back-end/signup.php" method="post">
			<h1>Criar conta</h1>
			<input type="text" name="nome" placeholder="Nome"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="text" name="usuario" placeholder="Nome de usuario"><br>
            <input type="password" name="senha" placeholder="Senha"><br>
            <input type="password" name="senhaconf" placeholder="Confirma sua sennha"><br>
			<button type="submit" name="criar">Criar conta</button><br>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="../back-end/login.php" method="post">
			<h1>Fazer login</h1>
			<br><input type="text" name="nomelog" placeholder="Email / Usuario"><br>
			<input type="password" name="senhalog" placeholder="Senha"><br>
			<br><button type="submit" name="logar">Logar</button>
			<?php 

				if(isset($_GET["error"])){
					if($_GET["error"] == "loginfalhou"){

						echo "<p>Dados errados, tente novamente.</P>";
					}
				}

				if(isset($_GET["sucssess"])){
					if($_GET["sucssess"] == "usuariocriado"){

						echo "<p>Usuario criado, agora é só logar.</P>";
					}
				}
			?>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Ja é parceiro?</h1>
				<p>Conecte-se com sua conta e desfrute de nosso site</p>
				<button class="ghost" id="signIn">logar</button>
				<p>Voltar a pagina inicial</p>
				<a href="../../index.php"><img src="../../img/siteFeatures/goTo.png" alt="Voltar"></a>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Não tem uma conta?</h1>
				<p>Junte-se a nós nessa jornada</p>
				<button class="ghost" id="signUp">Criar conta</button>
				<p>Voltar a pagina inicial</p>
				<a href="../../index.php"><img src="../../img/siteFeatures/goBack.png" alt="Voltar"></a>
			</div>
		</div>
	</div>
</div>

<script src="../scripts/login.js"></script>