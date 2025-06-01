<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);
require 'db.php';
require 'login.php';

$correo = $_POST['correo'];

$password = $_POST['password'];

$sql = "INSERT INTO logins (correo, password) VALUES (?,?)";

$stmt = prepare($sql);
$stmt->bind_param($correo,$password);
$stmt->execute();
$stmt->close();


echo"Los datos fueron enviados correctamente";


