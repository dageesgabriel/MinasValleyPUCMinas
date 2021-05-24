<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<title>Minas Valley</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/src/styles/index.css">
<link rel="stylesheet" type="text/css" href="/src/styles/carousel.css">
<link rel="stylesheet" type="text/css" href="/src/styles/typeWriter.css">
<link rel="stylesheet" type="text/css" href="/src/styles/general.css">
<link rel="shortcut icon" href="img/minasValley/logos/minasValleyFaviconNoFund.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

body, html {
  height: 100%;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("img/minasValley/cover/connectedCityCover.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}

@font-face { 
font-family:"Montserrat";
font-variant:normal;
font-weight:normal;
src:url("#FontID0") 
format(svg);
}

.str0 {
stroke:#FEFEFE;
stroke-width:200;
stroke-miterlimit:22.9256;
}

.fil1 {
fill:none;
}

.fnt0 {
font-weight:normal;
font-size:2661.55px;
font-family:'Montserrat';
}

.svg{
shape-rendering:geometricPrecision; 
text-rendering:geometricPrecision; 
image-rendering:optimizeQuality; 
fill-rule:evenodd; 
clip-rule:evenodd;
}

</style>

<header class="cannotSelect bgimg w3-display-container" style="height: 100px" id="home">
    
    <div class="w3-display-middle w3-center animate-svg">
        <xml version="1.0" encoding="UTF-8">
        <svg id="svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="297mm" height="210mm" version="1.1" viewBox="0 0 29700 21000">
        <defs>
        <font id="FontID0" horiz-adv-x="716" font-variant="normal" style="fill-rule:nonzero" font-weight="400">
        <missing-glyph><path d="M0 0z"/></missing-glyph>
        <glyph unicode="A" horiz-adv-x="716" d="M553.001 187l-390.002 0 -83.9999 -187 -77.0002 0 320.002 699.998 72.9988 0 320.002 -699.998 -77.9997 0 -83.9999 187zm-26.9993 59.9989l-168.004 376.003 -168 -376.003 336.003 0z"/>
        <glyph unicode="E" horiz-adv-x="669" d="M608.999 64.0003l0 -64.0003 -494.997 0 0 699.998 479.998 0 0 -63.9965 -406 0 0 -249.002 362 0 0 -63.0009 -362 0 0 -259.999 420.999 0z"/>
        <glyph unicode="I" horiz-adv-x="302" d="M114.001 699.998l73.9982 0 0 -699.998 -73.9982 0 0 699.998z"/>
        <glyph unicode="L" horiz-adv-x="588" d="M114.001 699.998l73.9982 0 0 -635.998 392.001 0 0 -64.0003 -465.999 0 0 699.998z"/>
        <glyph unicode="M" horiz-adv-x="954" d="M840.999 699.998l0 -699.998 -71 0 0 560.001 -274.998 -471 -35.0022 0 -274.998 467.998 0 -556.999 -71 0 0 699.998 60.9983 0 304 -518.998 301.001 518.998 60.9983 0z"/>
        <glyph unicode="N" horiz-adv-x="812" d="M698.999 699.998l0 -699.998 -60.9983 0 -450.001 568 0 -568 -73.9982 0 0 699.998 60.9983 0 451 -568 0 568 72.9988 0z"/>
        <glyph unicode="S" horiz-adv-x="614" d="M307.002 -6.00026c-51.9998,0 -101.835,8.33349 -149.503,25.0005 -47.664,16.667 -84.4996,38.6654 -110.5,65.9991l29.0019 57.0006c25.3311,-25.3349 58.9995,-45.8342 100.998,-61.5018 42.0018,-15.6638 85.3337,-23.4976 130.003,-23.4976 62.6665,0 109.665,11.5008 140.997,34.4987 31.3351,23.0016 47.0027,52.8339 47.0027,89.5005 0,27.9987 -8.50256,50.3353 -25.5002,66.9986 -17.0014,16.667 -37.8351,29.5016 -62.5012,38.5001 -24.6661,9.00227 -58.9995,18.8349 -103,29.5016 -52.6648,13.3343 -94.6666,26.1652 -125.998,38.5001 -31.3351,12.3349 -58.1691,31.166 -80.502,56.5009 -22.3329,25.3311 -33.4993,59.6645 -33.4993,103 0,35.3328 9.33291,67.4983 27.9987,96.5002 18.6658,28.9981 47.3333,52.1651 86.0025,69.4971 38.6654,17.3358 86.6638,25.9999 143.999,25.9999 39.9992,0 79.1682,-5.4968 117.499,-16.4979 38.3348,-11.0011 71.4997,-26.169 99.5022,-45.4998l-25.0005 -58.9995c-29.3363,19.3308 -60.6677,33.8337 -94.0016,43.4972 -33.334,9.6673 -65.9991,14.5028 -97.9993,14.5028 -61.3327,0 -107.501,-11.8352 -138.502,-35.5019 -30.997,-23.6667 -46.4992,-54.1677 -46.4992,-91.4993 0,-27.9987 8.50256,-50.5006 25.5002,-67.4983 17.0014,-17.0014 38.3348,-30.0013 64.0003,-39.0036 25.6655,-8.99852 60.1679,-18.8311 103.5,-29.4978 51.3347,-12.6656 92.8331,-25.1658 124.499,-37.5007 31.6695,-12.3312 58.5035,-31.0007 80.502,-56.0012 21.9985,-24.9967 32.9996,-58.8304 32.9996,-101.497 0,-35.3328 -9.49822,-67.502 -28.4984,-96.5002 -19.0002,-29.0019 -48.1674,-51.9998 -87.5016,-69.0011 -39.3342,-17.0014 -87.667,-25.5002 -144.998,-25.5002z"/>
        <glyph unicode="V" horiz-adv-x="697" d="M696 699.998l-310 -699.998 -72.9988 0 -310.004 699.998 80.0023 0 267.998 -607.999 270.001 607.999 75.0014 0z"/>
        <glyph unicode="Y" horiz-adv-x="634" d="M354 242.002l0 -242.002 -72.9988 0 0 242.002 -280.002 457.996 78.9991 0 240.003 -392.997 239.999 392.997 73.9982 0 -279.998 -457.996z"/>
        </font>
        </defs>
        <g id="Camada_x0020_1">
        <text x="4696.99" y="11438.67"  class="fil0 fnt0">MINAS VALLEY</text>
        <rect class="fil1 str0" x="3300.26" y="8649.26" width="22294.42" height="3715.74"/>
        </g>
        </svg>
    </div>
    <div class="w3-display-middle w3-center" style="margin: 100px 0 0 -12px">
        <p class="typeWriter-body typeWriter-line typeWriter-typing-animation">“O maior risco é não assumir nenhum risco” – Mark Zuckerberg</p>
    </div>
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
        <a class="navbar-brand" href="https://minasvalley.herokuapp.com/"><img src="img/minasValley/logos/minasValley02.png" width="150" height="26" alt="Minas Valley"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="src/front-end/about.php">Sobre nós</a></li>
          <li><a href="src/front-end/category.php">Categorias</a></li>
        </ul>
        <form class="navbar-form navbar-left" method="POST" action="pesquisar.php">
          <div class="input-group">
            <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" >
                <a class="glyphicon glyphicon-search"></a>
              </button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">

        <?php

            if(isset($_SESSION["usu_id"])){

              echo "<li><a href='src/front-end/profile.php'><span class='glyphicon glyphicon-user'></span> Perfil</a></li>";
              echo "<li><a href='src/back-end/logout.php'><span class='glyphicon glyphicon-off'></span> Logout</a></li>";
            }else{

              echo "<li><a href='src/front-end/signup.php'><span class='glyphicon glyphicon-user'></span> Cadastre-se</a></li>";
              echo "<li><a href='src/front-end/login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
            }

        ?>

        </ul>
      </div>
    </div>
  </nav>


<div class="w3-content w3-padding" style="max-width:1564px">

    <div class="w3-row-padding" id="about">
        <div class="w3-col l4 12"><br>
        <h2 class="index-tema w3-text-grey w3-padding-16">Descubra as mais promissoras Startups do Brasil e conecte-se</h2><hr>
          <h4 class="index-tema">Somos a plataforma que veio para unir Startups, Colaboradores e Investidores tudo em um só lugar! <p>Mergulhe neste novo mar de experiência conosco</h4><br>

          <h2 class="index-tema-icons w3-text-grey w3-padding-16"><i class="fa fa-check-square-o fa-fw w3-margin-right w3-xxlarge"></i>Networking de projetos?</h2>
          <h2 class="index-tema-icons w3-text-grey w3-padding-16"><i class="fa fa-check-square-o fa-fw w3-margin-right w3-xxlarge"></i>Maiores Startups do Brasil?</h2>
          <h2 class="index-tema-icons w3-text-grey w3-padding-16"><i class="fa fa-check-square-o fa-fw w3-margin-right w3-xxlarge"></i>Investidores mais agressivos do mercado?</h2>

        </div>

        <section class="galeria">
            <img class="foto" src="img/minasValley/carousel/startup01.jpg">
            <img class="foto" src="img/minasValley/carousel/startup02.jpg">
            <img class="foto" src="img/minasValley/carousel/startup03.jpg">
        </section>

  <div class="w3-text-grey w3-padding-16" id="projects">
    <br><h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Startups em Alta</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Nubank</div>
        <a href='src/front-end/startup.php'><img src="img/startups/nubank/logo.png" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Pic Pay</div>
        <img src="img/startups/picpay/logo.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Vindi</div>
        <img src="img/startups/vindi/logo.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Rubrik</div>
        <img src="img/startups/rubrik/logo.png" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Slack</div>
        <img src="img/startups/slack/logo.png" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Loggi</div>
        <img src="img/startups/loggi/logo.png" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Wework</div>
        <img src="img/startups/wework/logo.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">NIO</div>
        <img src="img/startups/nio/logo.png" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <div class="w3-text-grey w3-padding-16" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projetos em Destaque</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/projects/pagamentoQRCode/logo.jpg" style="width:100%">
      <h3>Pagamento por QR Code</h3>
      <p class="w3-opacity">Startup de Economia</p>
      <p>A Desenfila tem um sistema de hospedagem e de processamento das comandas na nuvem. O mercado Pago acessa essas informações, por meio do QR Code na comanda, e...</p>
      <p><a href='src/front-end/project.php' class="w3-button w3-light-grey w3-block">Saiba mais</a></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/projects/cachorroRobo/logo.jpg" style="width:100%">
      <h3>Cachorro Robo</h3>
      <p class="w3-opacity">Startup de Robotica</p>
      <p>Se você é do tipo que acha que ter um bichinho de estimação da muito trabalho ou que não tem muito tempo para cuidar, essa nova ideia pode mudar o seu jeito de pensar...</p>
      <p><a href='src/front-end/project.php' class="w3-button w3-light-grey w3-block">Saiba mais</a></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/projects/aloQuemFala/logo.png" style="width:100%">
      <h3>Alô, quem fala?</h3>
      <p class="w3-opacity">Startup de Dublagem</p>
      <p>O mercado de dublagem vem sofrendo muito com o momento atual devido a pandemia, causada pelo COVID-19. Nossos trabalho foram paralisado, pelo risco de trabalhar em um...</p>
      <p><a href='src/front-end/project.php' class="w3-button w3-light-grey w3-block">Saiba mais</a></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/projects/casaAutomatica/logo.jpg" style="width:100%">
      <h3>Casa Automática</h3>
      <p class="w3-opacity">Startup de Automação Residencial</p>
      <p>A SmartHó vem com um novo produto para mudar como você fica em casa. Trazendo um produto para automatizar a maior parte de sua casa o jeito que você fica em casa nunca mais...</p>
      <p><a href='src/front-end/project.php' class="w3-button w3-light-grey w3-block">Saiba mais</a></p>
    </div>
  </div>

  <div class="w3-text-grey w3-padding-16" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Popular entre os Investidores</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/investors/binance/logo.png" style="width:100%">
      <h3>Binance</h3>
      <p class="w3-opacity">Binance</p>
      <p>A Binance é uma bolsa global de criptomoedas que fornece uma plataforma para a negociação de mais de 100 moedas criptográficas. Desde o início de 2018, a Binance é...</p>
      <p><a href='src/front-end/investor.php' class="w3-button w3-light-grey w3-block">Saiba mais</a></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/investors/generalAtlantic/logo.png" style="width:100%">
      <h3>General Atlantic</h3>
      <p class="w3-opacity">General Atlantic</p>
      <p>A General Atlantic é uma empresa americana de growth equity que fornece capital e suporte estratégico para empresas de crescimento global. GA está sediada em New York, New York...</p>
      <p><a href='src/front-end/investor.php' class="w3-button w3-light-grey w3-block">Saiba mais</a></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/investors/lactec/logo.png" style="width:100%">
      <h3>Lactec</h3>
      <p class="w3-opacity">Lactec</p>
      <p>Aqui, a inovação está presente em cada projeto, em cada serviço que oferecemos. Somos um dos maiores centros de ciência e tecnologia do país, referência em soluções inovadoras para o setor produtivo – empresas...</p>
      <p><a href='src/front-end/investor.php' class="w3-button w3-light-grey w3-block">Saiba mais</a></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/investors/sequoia/logo.png" style="width:100%">
      <h3>Sequoia</h3>
      <p class="w3-opacity">Sequoia</p>
      <p>A Sequoia Capital é uma companhia americana focada em investimentos de capital de risco. Sua sede está localizada em Menlo Park, no Estado da Califórnia. O objetivo da Sequoia Capital é focar os seus...</p>
      <p><a href='src/front-end/investor.php' class="w3-button w3-light-grey w3-block">Saiba mais</a></p>
    </div>
  </div>
  
</div>
</div>

    <!-- Final Line -->
        <div class="w3-white w3-text-grey" style="margin: 0 0 30px 0">
            <div class="w3-container">
                <div class="w3-text-grey w3-padding-16">
                    <br><h3 class="w3-border-bottom"></h3>
                    <div style="text-align: center">
                        <br><h3 class="w3-border-black w3-padding-16" style="color: #000000;">Minas Valley é a maior comunidade de startups do Brasil
                            <a <div <a href="src/front-end/signup.php">
                                <button class="btn index-btn-gray" style="margin: 0 0 0 200px; width: 200px; height: 50px; font-family: arial; font-size: 14px; text-transform: uppercase; font-weight: 300; border: none; padding: 10px; cursor: pointer; display: inline-block; text-decoration: none;">FAZER CADASTRO</button>
                            </div></a>
                            <h5 style="color: #000000; margin: 0 0 0 270px;">Junte-se a nós e ajude a construir um ecossistema melhor</h5>
                        </h3>
                    </div>
                </div>
            </div>
        </div><br>

<footer class="w3-padding-32 w3-black w3-center w3-margin-top" id="redes">
    <h5>Nos siga em nossa redes sociais:</h5>
    <div class="w3-xlarge w3-padding-16">
        <a href="https://facebook.com/" target="_blank"><img src="img/socialFavicon/facebook-3-24.png"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="img/socialFavicon/instagram-24.png"></a>
        <a href="https://www.snapchat.com/l/pt-br/" target="_blank"><img src="img/socialFavicon/snapchat-24.png"></a>
        <a href="https://br.pinterest.com/" target="_blank"><img src="img/socialFavicon/pinterest-3-24.png"></a>
        <a href="https://twitter.com/" target="_blank"><img src="img/socialFavicon/twitter-3-24.png"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="img/socialFavicon/linkedin-3-24.png"></a>
    </div>
</footer>

</body>
</html>
