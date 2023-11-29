<?php

require_once("../../xse_conexion/xse_database.php");

// Recuperar los datos del formulario y limpiarlos
$titulo         = isset($_POST["titulo"]) ? trim($_POST["titulo"]) : '';
$descripcion    = isset($_POST["descripcion"]) ? trim($_POST["descripcion"]) : '';
$cuerpo_noticia = isset($_POST["cuerpo_noticia"]) ? trim($_POST["cuerpo_noticia"]) : '';
$autor          = isset($_POST["autor"]) ? trim($_POST["autor"]) : '';
$fecha          = isset($_POST["fecha"]) ? trim($_POST["fecha"]) : '';

// Validar que los campos no estén vacíos
if (empty($titulo) || empty($descripcion) || empty($autor) || empty($fecha)) {
    echo 'Por favor, completa todos los campos.';
} else {
    // Consulta preparada para evitar inyecciones SQL
    $sql = "INSERT INTO ueh_noticias (titulo, descripcion, cuerpo_noticia, autor, fecha) VALUES (?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Verificar si la consulta se preparó correctamente
    if ($stmt) {
        // Asociar parámetros
        $stmt->bind_param("sssss", $titulo, $descripcion, $cuerpo_noticia, $autor, $fecha);

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
