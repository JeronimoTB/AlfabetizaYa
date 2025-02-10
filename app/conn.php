<?php
$host = 'db'; // Nombre del servicio de MySQL definido en Docker Compose
$user = 'user'; // Usuario configurado en el archivo Docker Compose
$password = 'password'; // Contraseña configurada en el archivo Docker Compose
$database = 'alfabetiza'; // Base de datos configurada en Docker Compose

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
