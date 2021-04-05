<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../styles/register.css">
<body>

<form id="regForm" method="POST" action="../back-end/register.php" enctype="multipart/form-data">
  <h1>Registro:</h1>
  <div class="tab">Informações pessoais:
    <p><input placeholder="Profissão..." oninput="this.className = ''" name="prof"></p>
    <p><input placeholder="Telefone..." oninput="this.className = ''" name="tel"></p>
    <p><input placeholder="Cidade..." oninput="this.className = ''" name="cidade"></p>
    <p><input placeholder="Estado(MG,SP,GO...)" oninput="this.className = ''" name="estado"></p>
    <p><input type="hidden" value="<?php echo htmlspecialchars($_SESSION["usu_id"]); ?>" oninput="this.className = ''" name="id"></p>
  </div>
  <div class="tab">Image de perfil:
    <p><input type="file" oninput="this.className = ''" name="file"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Proximo</button>
      <button type="submit" id="submit" name="submit">Enviar</button>
    </div>
  </div>
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<script src="../scripts/register.js"></script>

</body>
</html>
