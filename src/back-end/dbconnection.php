<?php

$link = pg_connect("host=minasvalley.postgres.database.azure.com port=5432 dbname=minasvalley user=adm@minasvalley password=valleyValley$");
if (!$link) {
    die('Erro ao conectar com o banco PGSQL');
    }
    echo "Conectado com sucesso";
    ?> 