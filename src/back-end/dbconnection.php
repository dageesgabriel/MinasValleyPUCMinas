<?php

$conn = pg_connect("host=minasvalley.postgres.database.azure.com port=5432 dbname=minasvalley user=adm@minasvalley password=valleyValley$");
echo "Conectado com sucesso5";
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Conectado com sucesso5";
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Conectado com sucesso5";
echo "Host information: " . gethostname($conn) . PHP_EOL;
echo "Conectado com sucesso5";
?>
