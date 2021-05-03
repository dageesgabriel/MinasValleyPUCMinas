<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Startup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../img/minasValley/logos/minasValleyFaviconNoFund.png">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../styles/startup.css">
<link rel="stylesheet" type="text/css" href="../styles/evaluation.css">
<link rel="stylesheet" type="text/css" href="../styles/favorite.css">
<link rel="stylesheet" type="text/css" href="../styles/general.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<header>
<br><br><br>

</header>

<body class="cannotSelect">

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="https://minasvalley.herokuapp.com/"><img src="../../img/minasValley/logos/minasValley02.png" width="150" height="26" alt="Minas Valley"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../../index.php">Home</a></li>
          <li><a href="about.php">Sobre nós</a></li>
          <li><a href="category.php">Categorias</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Pesquisar">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form> 
        <ul class="nav navbar-nav navbar-right">

        <?php

            if(isset($_SESSION["usu_id"])){

              echo "<li><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Perfil</a></li>";
              echo "<li><a href='../back-end/logout.php'><span class='glyphicon glyphicon-off'></span> Logout</a></li>";
            }else{

              echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Cadastre-se</a></li>";
              echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
            }

        ?>

        </ul>
      </div>
    </div>
  </nav>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">

  <!-- Head Line -->
        <div class="w3-white w3-text-grey">
            <div class="w3-container">
 
                <div style="float: left; width: 130px; height :170px;">
                    <h2 class="w3-text-grey w3-padding-16"><img src="../../img/startups/nubank/logoNoFund.png" style="width:100%"></h2>
                </div>

                <div class="project-space-head" style="float: left; width: 150px; height :170px;">
                    <div class="project-name w3-text-grey w3-padding-16">NUBANK<br><div class="project-whatis">Startup</div></div>

                        <div class="project-name2" form method="POST" action="startup.php" enctype="multipart/form-data">
			                <div class="estrelas">
				                <input type="radio" id="vazio" name="estrela" value="" checked>
				
				                <label for="estrela_um"><i class="fa"></i></label>
				                <input type="radio" id="estrela_um" name="estrela" value="1">
				
				                <label for="estrela_dois"><i class="fa"></i></label>
				                <input type="radio" id="estrela_dois" name="estrela" value="2">
				
				                <label for="estrela_tres"><i class="fa"></i></label>
				                <input type="radio" id="estrela_tres" name="estrela" value="3">
				
				                <label for="estrela_quatro"><i class="fa"></i></label>
				                <input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				                <label for="estrela_cinco"><i class="fa"></i></label>
                                <input type="radio" id="estrela_cinco" name="estrela" value="5">
                            </div>
                        </div>
                </div>

                <div class="project-space-heart">
                    <button id="btnfav" name="btnfav" class="like-button"></button>
                </div>
            </div>
        </div>
  
    <!-- Left Column -->
    <div class="w3-twothird">

      <div class="w3-white w3-text-grey">
      
        <!-- First Left Column -->
        <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-container">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-bar-chart fa-fw w3-margin-right w3-xxlarge"></i>Descrição</h2><hr>

                <p><i class="w3-margin-right w3-large"></i>A história do Nubank começou com uma péssima experiência que David Vélez, CEO e fundador, teve com os serviços financeiros no Brasil. ... Junto da brasileira Cristina Junqueira e do americano Edward Wible, Vélez fundou em 2013 o Nubank, hoje o maior banco digital independente do mundo.</p>
                <p><i class="w3-margin-right w3-large"></i>O Nubank é uma empresa que usa a tecnologia e design para devolver às pessoas o controle sobre a sua vida financeira.</p>
                  <p><i class="w3-margin-right w3-large"></i>Criamos produtos simples e transparentes, que respeitam e dão liberdade aos nossos clientes – e temos times trabalhando dia e noite para atendê-los da melhor forma possível.</p>
                  <p><i class="w3-margin-right w3-large"></i>Nosso primeiro lançamento foi um cartão de crédito gratuito sem taxas ou anuidades – o roxinho. Ele é um cartão de crédito internacional, com a bandeira MasterCard®.</p>
                  <p><i class="w3-margin-right w3-large"></i>Além dele, o Nubank lançou também um programa de benefícios de cartão de crédito com pontos que nunca expiram – o Nubank Rewards – e uma conta digital e gratuita, com transferências ilimitadas, na qual seu dinheiro rende mais do que na poupança – a Conta do Nubank, NuConta.</p>
                  <p><i class="w3-margin-right w3-large"></i>Hoje, o Nubank já possui mais de 20 milhões de clientes – 12 milhões são usuários do cartão Nubank.</p>
                <br>
            </div>
        </div><br>

        <!-- Second Left Column -->
        <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-container">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-link fa-fw w3-margin-right w3-xxlarge"></i>Links</h2><hr>
                  <a href="https://www.Nubank.com.br/">Nubank.com.br</a></p><br>
            </div>
        </div><br>

        <!-- Third Left Column -->
        <div class="w3-white w3-text-grey w3-card-4">
            <div class="project-space-comments">
                <div> 
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-inbox fa-fw w3-margin-right w3-xxlarge"></i>Avalie</h2><hr>

                <h5>Sua Avaliação:</h5>
                <div class="project-name2" form method="POST" action="startup.php" enctype="multipart/form-data">
			        <div class="estrelas">
				        <input type="radio" id="vazio" name="estrela" value="" checked>
				
				        <label for="estrela_um"><i class="fa"></i></label>
				        <input type="radio" id="estrela_um" name="estrela" value="1">
				
				        <label for="estrela_dois"><i class="fa"></i></label>
				        <input type="radio" id="estrela_dois" name="estrela" value="2">
				
				        <label for="estrela_tres"><i class="fa"></i></label>
				        <input type="radio" id="estrela_tres" name="estrela" value="3">
				
				        <label for="estrela_quatro"><i class="fa"></i></label>
				        <input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				        <label for="estrela_cinco"><i class="fa"></i></label>
                        <input type="radio" id="estrela_cinco" name="estrela" value="5">
                    </div>
                </div>

                <h5 id="formComentarios"><br>Nome:</h5>
                    <input type="text" id="campoNome" />
                </div>
        
                <p> </p>
      
                <h5><br>Comentários:</h5>
                <textarea rows="10" cols="90" name="comentarios" type="text" maxlength="300" style="resize: none;" class="project-textarea" id="campoComentario" form="ussform"></textarea>
                
                <h5>
                    <br><input id="btnIncluirComentario" type="button" value="Publicar Avaliação">
                    <input id="btnCarregaDados" type="button" style="margin: 0 0 0 30px" value="Ver Comentários">
                </h5>

                <br><hr><div id="tela"></div>
                <script src="../scripts/comment.js"></script>

            </div>
        </div><br>

      <!-- End Class After Column -->
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-third">
    
      <div class="w3-container w3-white w3-margin-bottom">
        <div class="project-space-img">
            <img src="../../img/startups/nubank/nubank01.png" style="width:90%">
        </div>
      </div>

    <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-container">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-users fa-fw w3-margin-right w3-xxlarge"></i>Contato</h2><hr>
               <p>0800 608 6236</p>
               <p>meajuda@nubank.com.br</p>
               <p>Atendimento 24h</p>
        </div>
    </div><br>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

</div>

<footer class="w3-padding-32 w3-black w3-center w3-margin-top" id="redes">
    <h5>Nos siga em nossa redes sociais:</h5>
    <div class="w3-xlarge w3-padding-16">
        <a href="https://facebook.com/" target="_blank"><img src="../../img/socialFavicon/facebook-3-24.png"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../../img/socialFavicon/instagram-24.png"></a>
        <a href="https://www.snapchat.com/l/pt-br/" target="_blank"><img src="../../img/socialFavicon/snapchat-24.png"></a>
        <a href="https://br.pinterest.com/" target="_blank"><img src="../../img/socialFavicon/pinterest-3-24.png"></a>
        <a href="https://twitter.com/" target="_blank"><img src="../../img/socialFavicon/twitter-3-24.png"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="../../img/socialFavicon/linkedin-3-24.png"></a>
    </div>
</footer>

</body>
</html>

<script src="../scripts/favorite.js"></script>