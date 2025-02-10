<?php

require "conn.php";
session_start();
$horasServicio = $_POST['horasServicio'];
$LugarServicio = $_POST['LugarServicio'];
$numeroCarnetEstudiante = $_POST['numeroCarnetEstudiante'];

$sql = "UPDATE solicitar SET lugarServicio = '$LugarServicio' WHERE numeroCarnetEstudiante = $numeroCarnetEstudiante;";
$result = MYSQLI_QUERY($connection, $sql);

$sql = "UPDATE estudiantes SET horasServicio = $horasServicio WHERE numeroCarnetEstudiante = $numeroCarnetEstudiante;";
$result = MYSQLI_QUERY($connection, $sql);

header('Location: http://localhost:8080/PaginaAsignar.php?m=56');

?>