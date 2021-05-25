<?php
if(!@($conexao=pg_connect ("host=minasvalley.postgres.database.azure.com dbname=minasvalley port=5432 user=adm@minasvalley password=valleyValley$"))) {
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
} else {
   pg_close ($conexao);
   print "Conexão OK!"; 
}
?>