<?php
$host = 'db'; // Servicio MySQL dentro de Docker
$user = 'user';
$pwd = 'password';
$dbname = 'alfabetiza';

$connection = mysqli_connect($host, $user, $pwd, $dbname);

if (!$connection) {
    die('Error: No se pudo conectar a MySQL. ' . mysqli_connect_error());
}

echo 'Conexión exitosa a la base de datos.';
?>
