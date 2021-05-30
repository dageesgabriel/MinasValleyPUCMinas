<?php
$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=minasvalley user=ti2cc password=ti@ccc options='--application_name=$appName'";

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "select * from usuario");
var_dump(pg_fetch_all($result));

?>