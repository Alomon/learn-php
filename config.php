<?php

$db_host = "MySQL-8.4";
$db_username = "root";
$db_pass = "";
$db_name = "cristaldevil";



$conn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);

if (!$conn) {
    die("Ошибка соединения: " . mysqli_connect_error());
}
