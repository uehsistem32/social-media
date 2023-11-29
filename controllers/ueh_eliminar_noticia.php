<?php

require_once("../../xse_conexion/xse_database.php");

// Obtiene el ID del registro a eliminar
$id_trabajo = $_POST['id'];
error_log("ID a eliminar: " . $id_trabajo);
// Realiza la eliminación en la base de datos
$sql = "DELETE FROM ueh_noticias WHERE id = $id_trabajo";

if ($conn->query($sql) === TRUE) {
    // Envía una respuesta exitosa si la eliminación fue exitosa
    echo "Registro eliminado con éxito";
} else {
    // Envía una respuesta de error si la eliminación falla
    echo "Error al eliminar el registro: " . $conn->error;
}

$conn->close();



?>