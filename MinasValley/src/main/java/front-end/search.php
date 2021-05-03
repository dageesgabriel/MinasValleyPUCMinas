<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>Pesquisa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../img/minasValley/logos/minasValleyFaviconNoFund.png">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../styles/category.css">
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

  <div class="w3-text-grey w3-padding-16" id="projects">
    <h1 class="w3-padding-16 category-align">Pesquisa<hr></h1>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/pagamentoQRCode/logo.jpg" style="width:100%">
      <h3>Pagamento por QR Code</h3>
      <p class="w3-opacity">Startup de Economia</p>
      <p>A Desenfila tem um sistema de hospedagem e de processamento das comandas na nuvem. O mercado Pago acessa essas informações, por meio do QR Code na comanda, e...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/cachorroRobo/logo.jpg" style="width:100%">
      <h3>Cachorro Robo</h3>
      <p class="w3-opacity">Startup de Robotica</p>
      <p>Se você é do tipo que acha que ter um bichinho de estimação da muito trabalho ou que não tem muito tempo para cuidar, essa nova ideia pode mudar o seu jeito de pensar...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/aloQuemFala/logo.png" style="width:100%">
      <h3>Alô, quem fala?</h3>
      <p class="w3-opacity">Startup de Dublagem</p>
      <p>O mercado de dublagem vem sofrendo muito com o momento atual devido a pandemia, causada pelo COVID-19. Nossos trabalho foram paralisado, pelo risco de trabalhar em um...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/casaAutomatica/logo.jpg" style="width:100%">
      <h3>Casa Automática</h3>
      <p class="w3-opacity">Startup de Automação Residencial</p>
      <p>A SmartHó vem com um novo produto para mudar como você fica em casa. Trazendo um produto para automatizar a maior parte de sua casa o jeito que você fica em casa nunca mais...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    </div>

    <br><hr><br><br>

    <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/pagamentoQRCode/logo.jpg" style="width:100%">
      <h3>Pagamento por QR Code</h3>
      <p class="w3-opacity">Startup de Economia</p>
      <p>A Desenfila tem um sistema de hospedagem e de processamento das comandas na nuvem. O mercado Pago acessa essas informações, por meio do QR Code na comanda, e...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/cachorroRobo/logo.jpg" style="width:100%">
      <h3>Cachorro Robo</h3>
      <p class="w3-opacity">Startup de Robotica</p>
      <p>Se você é do tipo que acha que ter um bichinho de estimação da muito trabalho ou que não tem muito tempo para cuidar, essa nova ideia pode mudar o seu jeito de pensar...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/aloQuemFala/logo.png" style="width:100%">
      <h3>Alô, quem fala?</h3>
      <p class="w3-opacity">Startup de Dublagem</p>
      <p>O mercado de dublagem vem sofrendo muito com o momento atual devido a pandemia, causada pelo COVID-19. Nossos trabalho foram paralisado, pelo risco de trabalhar em um...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/casaAutomatica/logo.jpg" style="width:100%">
      <h3>Casa Automática</h3>
      <p class="w3-opacity">Startup de Automação Residencial</p>
      <p>A SmartHó vem com um novo produto para mudar como você fica em casa. Trazendo um produto para automatizar a maior parte de sua casa o jeito que você fica em casa nunca mais...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    </div>

    <br><hr><br><br>

    <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/pagamentoQRCode/logo.jpg" style="width:100%">
      <h3>Pagamento por QR Code</h3>
      <p class="w3-opacity">Startup de Economia</p>
      <p>A Desenfila tem um sistema de hospedagem e de processamento das comandas na nuvem. O mercado Pago acessa essas informações, por meio do QR Code na comanda, e...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/cachorroRobo/logo.jpg" style="width:100%">
      <h3>Cachorro Robo</h3>
      <p class="w3-opacity">Startup de Robotica</p>
      <p>Se você é do tipo que acha que ter um bichinho de estimação da muito trabalho ou que não tem muito tempo para cuidar, essa nova ideia pode mudar o seu jeito de pensar...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/aloQuemFala/logo.png" style="width:100%">
      <h3>Alô, quem fala?</h3>
      <p class="w3-opacity">Startup de Dublagem</p>
      <p>O mercado de dublagem vem sofrendo muito com o momento atual devido a pandemia, causada pelo COVID-19. Nossos trabalho foram paralisado, pelo risco de trabalhar em um...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/casaAutomatica/logo.jpg" style="width:100%">
      <h3>Casa Automática</h3>
      <p class="w3-opacity">Startup de Automação Residencial</p>
      <p>A SmartHó vem com um novo produto para mudar como você fica em casa. Trazendo um produto para automatizar a maior parte de sua casa o jeito que você fica em casa nunca mais...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    </div>

    <br><hr><br><br>

    <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/pagamentoQRCode/logo.jpg" style="width:100%">
      <h3>Pagamento por QR Code</h3>
      <p class="w3-opacity">Startup de Economia</p>
      <p>A Desenfila tem um sistema de hospedagem e de processamento das comandas na nuvem. O mercado Pago acessa essas informações, por meio do QR Code na comanda, e...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/cachorroRobo/logo.jpg" style="width:100%">
      <h3>Cachorro Robo</h3>
      <p class="w3-opacity">Startup de Robotica</p>
      <p>Se você é do tipo que acha que ter um bichinho de estimação da muito trabalho ou que não tem muito tempo para cuidar, essa nova ideia pode mudar o seu jeito de pensar...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/aloQuemFala/logo.png" style="width:100%">
      <h3>Alô, quem fala?</h3>
      <p class="w3-opacity">Startup de Dublagem</p>
      <p>O mercado de dublagem vem sofrendo muito com o momento atual devido a pandemia, causada pelo COVID-19. Nossos trabalho foram paralisado, pelo risco de trabalhar em um...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="../../img/projects/casaAutomatica/logo.jpg" style="width:100%">
      <h3>Casa Automática</h3>
      <p class="w3-opacity">Startup de Automação Residencial</p>
      <p>A SmartHó vem com um novo produto para mudar como você fica em casa. Trazendo um produto para automatizar a maior parte de sua casa o jeito que você fica em casa nunca mais...</p>
      <p><button class="w3-button w3-light-grey w3-block">Saiba mais</button></p>
    </div>
    </div>
  
    <br>

  <!-- End Page Container -->

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