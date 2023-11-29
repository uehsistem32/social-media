<?php

require_once("../../xse_conexion/xse_database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id']; // Recuerda validar y sanitizar los datos recibidos
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $cuerpo_noticia = $_POST['cuerpo_noticia'];
    $autor = $_POST['autor'];


    // Actualizar los datos en la base de datos
    $sql = "UPDATE ueh_noticias SET titulo='$titulo', descripcion='$descripcion', cuerpo_noticia='$cuerpo_noticia', autor='$autor' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        // Si la actualización se realizó con éxito
        echo "Datos actualizados correctamente";
    } else {
        // Si hubo un error en la actualización
        echo "Error al actualizar datos: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
