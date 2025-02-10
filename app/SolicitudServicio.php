<?php
require "conn.php";
session_start();

// Verificar conexión
if (!$connection) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Validar si el formulario ha enviado los datos
if (!isset($_POST['gradoEstudiante'], $_POST['seccionEstudiante'], $_POST['numeroCarnetEstudiante'])) {
    die("Error: Datos incompletos del formulario.");
}

// Obtener y sanitizar los datos del formulario
$gradoEstudiante = mysqli_real_escape_string($connection, $_POST['gradoEstudiante']);
$seccionEstudiante = mysqli_real_escape_string($connection, $_POST['seccionEstudiante']);
$numeroCarnetEstudiante = mysqli_real_escape_string($connection, $_POST['numeroCarnetEstudiante']);

// Verificar si la solicitud ya existe
$sql = "SELECT COUNT(*) AS SolicitudExistente FROM solicitar WHERE numeroCarnetEstudiante = '$numeroCarnetEstudiante';";
$result = mysqli_query($connection, $sql);

// Manejo de errores en la consulta
if (!$result) {
    die("Error en la consulta: " . mysqli_error($connection));
}

$datos = mysqli_fetch_assoc($result);

if ($datos["SolicitudExistente"] > 0) { // Cambié a > 0 en caso de varias solicitudes
    header('Location: ./SoliServicio.php?m=93');
    exit();
} elseif (number_format($_SESSION["horasUsuario"]) == 80) {
    header('Location: ./SoliServicio.php?m=76');
    exit();
} else {
    // Actualizar información del estudiante
    $sql = "UPDATE estudiantes SET gradoEstudiante = '$gradoEstudiante', seccionEstudiante = '$seccionEstudiante' WHERE numeroCarnetEstudiante = '$numeroCarnetEstudiante';";
    if (!mysqli_query($connection, $sql)) {
        die("Error al actualizar el estudiante: " . mysqli_error($connection));
    }

    // Insertar en la tabla `Solicitar`
    $sql = "INSERT INTO solicitar (fechaSolicitud, numeroCarnetEstudiante) VALUES (CURDATE(), '$numeroCarnetEstudiante');";
    if (!mysqli_query($connection, $sql)) {
        die("Error al insertar en la tabla Solicitar: " . mysqli_error($connection));
    }

    // Redirigir en caso de éxito
    header('Location: ./SoliServicio.php?m=50');

    exit();
}
?>
