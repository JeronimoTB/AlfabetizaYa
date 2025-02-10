<?php
    require "conn.php";

    $numeroCarnet = $_POST['numCarnet'];
    $nombreEstudiante = $_POST['nombreEstudiante'];
    $apellidoEstudiante = $_POST['apellidoEstudiante'];
    $edadEstudiante = $_POST['edadEstudiante'];
    $documentoEstudiante = $_POST['documentoEstudiante'];
    $contraEstudiante = $_POST['contraEstudiante'];
    $contraEstudiante2 = $_POST['contraEstudiante2'];
    
    // Consulta preparada para verificar si el estudiante existe
    $stmt = $connection->prepare("SELECT COUNT(numeroCarnetEstudiante) AS NumeroExistente FROM InicioSesionEs WHERE numeroCarnetEstudiante = ?");
    $stmt->bind_param("s", $numeroCarnet);
    $stmt->execute();
    $result = $stmt->get_result();
    $datos = $result->fetch_assoc();
    
    if ($datos["NumeroExistente"] == 1) {
        header("location: http://localhost:8080/log.php?m=80");
    } else {
        if ($contraEstudiante == $contraEstudiante2) {
            // Consulta preparada para insertar un nuevo estudiante
            $stmt = $connection->prepare("INSERT INTO estudiantes (numeroCarnetEstudiante, nombreEstudiante, apellidoEstudiante, edadEstudiante, estadoEstudiante, numeroDocumentoEstudiante, horasServicio, contrasenaEstudiante) VALUES (?, ?, ?, ?, 'Inactivo', ?, 0, ?)");
            $stmt->bind_param("sssiis", $numeroCarnet, $nombreEstudiante, $apellidoEstudiante, $edadEstudiante, $documentoEstudiante, $contraEstudiante);
            $stmt->execute();
            
            header("location: http://localhost:8080/log.php?m=78");
        } else {
            header("location: http://localhost:8080/log.php?m=77");
        }
    }
    
?>