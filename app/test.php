<?php
$conn = mysqli_connect('100.20.92.101', 'user', 'password', 'alfabetiza');

if ($conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error de conexión: " . mysqli_connect_error();
}
?>
