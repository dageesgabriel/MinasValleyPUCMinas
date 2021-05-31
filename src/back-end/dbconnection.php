<?php
$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=minasvalley user=ti2cc password=ti@ccc";

//simple check
$conn = pg_connect($connStr);

?>