<?php

$host = "127.0.0.1";
$user = "root";
$password = "123456";
$db = "usuarios";

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error){
    die("Error al realizar la conexion" . $conn->connect_error);

}
