<?php
    //Criar a conexao
    $conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "ba38318d6b6b2d", "9de311a3", "heroku_210452ebbd19449");
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM usuario WHERE usu_nome LIKE '%$pesquisar%' ";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "Resultado da pesquisa: ".$rows_cursos['usu_nome']."<br>";
    }
?>