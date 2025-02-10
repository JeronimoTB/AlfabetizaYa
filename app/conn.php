<?php
// Usar las variables de entorno pasadas a Render
$host = 'db'; // Este debe coincidir con el nombre del servicio en docker-compose.yml
$user = getenv('MYSQL_USER') ?: 'root';
$password = getenv('MYSQL_PASSWORD') ?: '';
$database = getenv('MYSQL_DATABASE') ?: 'alfabetiza';

// Conexión
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
