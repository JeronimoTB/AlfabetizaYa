<?php
ob_start(); // Inicia un buffer de salida
require "conn.php";
session_start(); // Asegúrate de que no haya salida antes de esto

// Obtener y sanitizar datos del formulario
$numeroCarnet = mysqli_real_escape_string($connection, $_POST['numCarnet']);
$contrasena = mysqli_real_escape_string($connection, $_POST['contra']);

// Verificar en la tabla estudiantes primero
$sql = "SELECT contrasenaEstudiante, nombreEstudiante, horasServicio 
        FROM estudiantes 
        WHERE numeroCarnetEstudiante = ?";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($stmt, "s", $numeroCarnet);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$datos = mysqli_fetch_assoc($result);

if ($datos) {
    // Validar la contraseña
    if ($datos['contrasenaEstudiante'] === $contrasena) {
        $_SESSION["nomUsuario"] = $datos["nombreEstudiante"];
        $_SESSION["horasUsuario"] = $datos["horasServicio"];
        header('Location: princi.php');
        exit;
    } else {
        header("Location: log.php?m=32");
        exit;
    }
} else {
    // Si no se encuentra en estudiantes, buscar en Administradores
    $sql = "SELECT contrasenaAdministrador, nombreAdministrador 
            FROM administrador 
            WHERE cedulaAdministrador = ?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "s", $numeroCarnet);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $datos = mysqli_fetch_assoc($result);

    if ($datos && $datos['contrasenaAdministrador'] === $contrasena) {
        $_SESSION["nomUsuario"] = $datos["nombreAdministrador"];
        header('Location: admins.php');
        exit;
    } else {
        header("Location: log.php?m=32");
        exit;
    }
}
ob_end_flush(); // Envía todo el contenido del buffer al navegador
// Si no se encontró el usuario en ninguna tabla
header("Location: log.php?m=32");
exit;
?>
