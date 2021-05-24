<?php
session_start();

require_once '../back-end/dbconnection.php';

$id = $_SESSION["usu_id"];

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuario WHERE usu_id = '".$id."';";
$result = $conn->query($sql);

?>

?>

<!DOCTYPE html>
<html>
<title>Perfil</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../img/minasValley/logos/minasValleyFaviconNoFund.png">
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


<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <div class="w3-row-padding">
  
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="../../img/img_upload/<?php if($result->num_rows > 0){while($row = mysqli_fetch_assoc($result)){ echo $row['usu_img'];?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2><?php echo $row['usu_nome'];?></h2>
          </div>
        </div>
        <div class="w3-container">
        <br>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large"></i><?php echo $row['usu_profissao'];?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large"></i><?php echo $row['usu_cidade'];?>, <?php echo $row['usu_estado'];?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large"></i><?php echo $row['usu_email'];?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large"></i><?php echo $row['usu_telefone'];?></p>
          <hr>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right"></i>Linguas</b></p>

          <p><?php echo $row['usu_lang1'];?></p>
          <div class="w3-light-grey">
            <p><i class="fa-fw w3-margin-right w3-large"></i>Nivel: <?php echo $row['usu_lvl1'];?></p>
          </div>

          <p><?php echo $row['usu_lang2'];?></p>
          <div class="w3-light-grey">
          <p><i class="fa-fw w3-margin-right w3-large"></i>Nivel: <?php echo $row['usu_lvl2'];?></p>
          </div>
          
          <p><?php echo $row['usu_lang3'];?></p>
          <div class="w3-light-grey">
           <p><i class="fa-fw w3-margin-right w3-large"></i>Nivel: <?php echo $row['usu_lvl3'];?></p>
          </div>

          <br>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right"></i>Favoritos</b></p>
          <div id="psqsalvas" class="w3-light-grey">
          </div>
          <br>
        </div>
        <form action="register.php">
          <div>
          <p class="w3-large"><button class="w3-margin-right" type="submit">Atualizar dados de perfil</button></p>
          </div>
        </form>
        <form action="language.php">
          <div>
          <p class="w3-large"><button class="w3-margin-right" type="submit">Atualizar dados de idioma</button></p>
          </div>
        </form>
        <form action="register_work.php">
          <div>
          <p class="w3-large"><button class="w3-margin-right" type="submit">Atualizar dados de trabalho</button></p>
          </div>
        </form>
        <form action="register_education.php">
          <div>
          <p class="w3-large"><button class="w3-margin-right" type="submit">Atualizar dados de educação</button></p>
          </div>
        </form>
      </div><br>

    </div>

    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge"></i>Experiência de Trabalho</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['usu_cargo1'];?></b></h5>
          <h6><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['usu_tempo1'];?></h6>
          <p><?php echo $row['usu_descri1'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['usu_cargo2'];?></b></h5>
          <h6><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['usu_tempo2'];?></h6>
          <p><?php echo $row['usu_descri2'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['usu_cargo3'];?></b></h5>
          <h6><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['usu_tempo3'];?></h6>
          <p><?php echo $row['usu_descri3'];?></p>
          <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge"></i>Curriculos Educacionais</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['usu_cargo4'];?></b></h5>
          <h6><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['usu_tempo4'];?></h6>
          <p><?php echo $row['usu_descri4'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['usu_cargo5'];?></b></h5>
          <h6><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['usu_tempo5'];?></h6>
          <p><?php echo $row['usu_descri5'];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['usu_cargo6'];?></b></h5>
          <h6><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['usu_tempo6'];}}?></h6>
          <p><?php echo $row['usu_descri6'];?></p><br>
        </div>
      </div>

    </div>
    
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

<?php 
$conn->close();
?>