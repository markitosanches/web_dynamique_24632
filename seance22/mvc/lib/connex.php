<?php
$connex = mysqli_connect('localhost', 'root', '', 'store', '3306');

if(mysqli_connect_error()){
    echo "Fail to connect ".mysqli_connect_error();
    exit();
}

mysqli_set_charset($connex, "utf8");

?>