<?php

$serverName = "127.0.0.1:3307";
$link = mysqli_connect("127.0.0.1","admin", "admin", "myproject");

if(!$link){
    echo 'ERROR UNABLE TO CONNECT TO MYSQL ' . PHP_EOL;
    echo 'DEBUG errno  ' . mysqli_connect_errno() . PHP_EOL;
    echo 'DEBUG error  ' . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MYSQL was made!". PHP_EOL;
echo "Host information ". mysqli_get_host_info($link). PHP_EOL;

mysqli_close($link);

?>