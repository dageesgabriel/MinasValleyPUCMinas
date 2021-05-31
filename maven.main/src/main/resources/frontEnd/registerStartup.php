<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>RegisterStartup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../images/minasValley/logos/minasValleyFaviconNoFund.png">
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
        <a class="navbar-brand" href="https://minasvalley.herokuapp.com/"><img src="../images/minasValley/logos/minasValley02.png" width="150" height="26" alt="Minas Valley"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../../resources/index.php">Home</a></li>
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
              echo "<li><a href='../backEnd/logout.php'><span class='glyphicon glyphicon-off'></span> Logout</a></li>";
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
                    <h2 class="w3-text-grey w3-padding-16"><img src="../images/registerStartup&Projetos/startups.png" style="width:120%"></h2>
                </div>

                <div class="project-space-head" style="float: left; width: 150px; height :170px;">

                  <div class="form-container sign-in-container">
		                <form action="../resources/backEnd/signup.php" method="post">
			                <input type="text" name="nome" placeholder="Nome da startup" style="float: left; border-radius:4px; margin: 38px 0 0 30px;"><br>
		              	  <button type="submit" name="criar" style="float: left; border-radius:4px; margin: 0 0 0 80px;">Salvar</button><br>
                    </form>
                  </div>

                        <div class="project-name2" form method="POST" action="startup.php" enctype="multipart/form-data">
			                <div class="estrelas" style="float: right; margin: 10px 0 0 30px;">
				                <input type="radio" id="vazio" name="estrela" value="" checked>
				
				                <label for="estrela_um"><i class="fa"></i></label>
				                <label for="estrela_dois"><i class="fa"></i></label>
				                <label for="estrela_tres"><i class="fa"></i></label>
				                <label for="estrela_quatro"><i class="fa"></i></label>
				                <label for="estrela_cinco"><i class="fa"></i></label>
                                
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

                <div class="form-container sign-in-container">
		                <form action="../resources/backEnd/signup.php" method="post">
			                <input type="text" name="nome" placeholder="Adicione a descrição da sua Startup" style="float: left; border-radius:4px; margin: 2px 0 5px 5px; width: 650px; height :320px;"><br>
                      <button type="submit" name="criar" style="float: left; border-radius:4px; margin: 275px 0 0 5px;">Salvar</button><br>
                    </form>
                  </div>

                <br>
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
            <img src="../images/registerStartup&Projetos/startupM1.jpg" style="width:110%">
        </div>
      </div>

    <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-container">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-users fa-fw w3-margin-right w3-xxlarge"></i>Contato</h2><hr>


            <div class="form-container sign-in-container">
		                <form action="../resources/backEnd/signup.php" method="post">
			                <input type="text" name="nome" placeholder="Adicione o telefone para contato" style="float: left; border-radius:4px; margin: 0 0 5px 5px; width: 240px; height :30px;"><br>
                      <input type="text" name="nome" placeholder="Adicione o email para contato" style="float: left; border-radius:4px; margin: 0 0 5px 5px; width: 240px; height :30px;"><br>
                      <input type="text" name="nome" placeholder="Adicione o horario de funcionamento" style="float: left; border-radius:4px; margin: 0 0 5px 5px; width: 240px; height :30px;"><br>
                      <button type="submit" name="criar" style="float: left; border-radius:4px; margin: 4px 0 0 5px;">Salvar</button><br>
                    </form>
                  </div>

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
        <a href="https://facebook.com/" target="_blank"><img src="../images/socialFavicon/facebook-3-24.png"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../images/socialFavicon/instagram-24.png"></a>
        <a href="https://www.snapchat.com/l/pt-br/" target="_blank"><img src="../images/socialFavicon/snapchat-24.png"></a>
        <a href="https://br.pinterest.com/" target="_blank"><img src="../images/socialFavicon/pinterest-3-24.png"></a>
        <a href="https://twitter.com/" target="_blank"><img src="../images/socialFavicon/twitter-3-24.png"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="../images/socialFavicon/linkedin-3-24.png"></a>
    </div>
</footer>

</body>
</html>

<script src="../scripts/favorite.js"></script>