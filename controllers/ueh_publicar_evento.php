<?php

require_once("../../xse_conexion/xse_database.php");

// Recuperar los datos del formulario y limpiarlos
$nombre_evento  = isset($_POST["nombre_evento"]) ? trim($_POST["nombre_evento"]) : '';
$fecha_hora     = isset($_POST["fecha_hora"]) ? trim($_POST["fecha_hora"]) : '';
$lugar_evento   = isset($_POST["lugar_evento"]) ? trim($_POST["lugar_evento"]) : '';


// Validar que los campos no estén vacíos
if (empty($nombre_evento) || empty($fecha_hora) || empty($lugar_evento)) {
    echo 'Por favor, completa todos los campos.';
} else {
    // Consulta preparada para evitar inyecciones SQL
    $sql = "INSERT INTO ueh_eventos (nombre_evento, fecha_hora, lugar_evento) VALUES (?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Verificar si la consulta se preparó correctamente
    if ($stmt) {
        // Asociar parámetros
        $stmt->bind_param("sss", $nombre_evento, $fecha_hora, $lugar_evento);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo 'Los datos se han guardado correctamente.';
        } else {
            echo "Error al guardar los datos: " . $stmt->error;
        }

        // Cerrar la declaración preparada
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}

?>
