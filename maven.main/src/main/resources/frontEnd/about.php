<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Sobre</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../resources/images/minasValley/logos/minasValleyFaviconNoFund.png">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../styles/project.css">
<link rel="stylesheet" type="text/css" href="../styles/evaluation.css">
<link rel="stylesheet" type="text/css" href="../styles/favorite.css">
<link rel="stylesheet" type="text/css" href="../styles/about.css">
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
        <a class="navbar-brand" href="https://minasvalley.herokuapp.com/"><img src="../../resources/images/minasValley/logos/minasValley02.png" width="150" height="26" alt="Minas Valley"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../../resources/index.php">Home</a></li>
          <li><a href="#about">Sobre nós</a></li>
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
        <div class="w3-white w3-text-grey" style="margin: 0 0 30px 0">
            <div class="w3-container">
                <br><img class="w3-image about-align" src="../../resources/images/minasValley/logos/minasValley05.png">
                <br>
            </div>
        </div>
  
    <!-- Left Column -->
    <div class="w3-half">

      <div class="w3-white w3-text-grey">
      
        <!-- First Left Column -->
        <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-container">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-address-book-o fa-fw w3-margin-right w3-xxlarge"></i>Sobre Nós</h2><hr>

                <p><i class="w3-margin-right w3-large"></i>O nome Minas Valley surgiu como uma brincadeira e hoje é referência para empresas de base tecnológica do Brasil todo. A comunidade surgiu em 2020, durante encontros informais dos empreendedores de algumas das maiores startups brasileiras.</p>
                   <p>Hoje somos mais de 200 empresas de diversos setores, além de espaços de coworking, aceleradoras, investidores e interessados. Se você tem uma Startup, ou um projeto que tenha sinergia com o nosso ecossistema, não deixe de se cadastrar.</p>
                   <p>O objetivo é reunir as Startups do Brasil todo para juntos identificar oportunidades, necessidades e incentivos para este mercado, além de divulgar vagas e notícias.</p>
                   <p>Contamos com sua participação!</p>
                <br>
            </div>
        </div><br>

      <!-- End Class After Column -->
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-half">
    
      <div class="w3-container w3-white w3-margin-bottom">
        <div class="project-space-img">
            <img src="../../resources/images/minasValley/about/connectedBlueCityCover.jpg" style="width:104%">
        </div>
      </div>

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
        <a href="https://facebook.com/" target="_blank"><img src="../../resources/images/socialFavicon/facebook-3-24.png"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../../resources/images/socialFavicon/instagram-24.png"></a>
        <a href="https://www.snapchat.com/l/pt-br/" target="_blank"><img src="../../resources/images/socialFavicon/snapchat-24.png"></a>
        <a href="https://br.pinterest.com/" target="_blank"><img src="../../resources/images/socialFavicon/pinterest-3-24.png"></a>
        <a href="https://twitter.com/" target="_blank"><img src="../../resources/images/socialFavicon/twitter-3-24.png"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="../../resources/images/socialFavicon/linkedin-3-24.png"></a>
    </div>
</footer>

</body>
</html>