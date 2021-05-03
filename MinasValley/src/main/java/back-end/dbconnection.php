<?php

$conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "ba38318d6b6b2d", "9de311a3", "heroku_210452ebbd19449");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

?>
