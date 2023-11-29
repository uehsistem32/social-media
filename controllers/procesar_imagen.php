<?php
include '../../xse_conexion/xse_database.php';

if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $nombreArchivo = $_FILES['imagen']['name'];
    $archivoTemp = $_FILES['imagen']['tmp_name'];

    $carpetaDestino = 'carpeta_imagenes_slider1/';
    move_uploaded_file($archivoTemp, $carpetaDestino . $nombreArchivo);

    $rutaImagen = $carpetaDestino . $nombreArchivo;

    // Obtener la posición seleccionada por el usuario
    $posicion = $_POST['posicion'];

    if ($posicion == 0) {
        // Obtener la imagen actual en la primera posición
        $sqlFirstImage = "SELECT * FROM ueh_imagenes WHERE orden = 0 LIMIT 1";
        $resultFirstImage = $conn->query($sqlFirstImage);

        if ($resultFirstImage !== false && $resultFirstImage->num_rows > 0) {
            $rowFirstImage = $resultFirstImage->fetch_assoc();
            $idPrimeraImagen = $rowFirstImage['id'];

            // Actualizar los datos de la imagen en la primera posición con la nueva imagen
            $sqlUpdate = "UPDATE ueh_imagenes SET nombre = '$nombreArchivo', ruta = '$rutaImagen' WHERE id = $idPrimeraImagen";

            if ($conn->query($sqlUpdate) === TRUE) {
                header('refresh:1; ../inicioportal.php');
                // header("Location: index.php");
                exit();
            } else {
                echo "Error al actualizar imagen en la base de datos: " . $conn->error;
            }
        } else {
            // Si no se encuentra imagen en la primera posición, insertar la nueva imagen como primera
            $sqlInsert = "INSERT INTO ueh_imagenes (nombre, ruta, orden) VALUES ('$nombreArchivo', '$rutaImagen', 0)";

            if ($conn->query($sqlInsert) === TRUE) {
                header('refresh:1; ../inicioportal.php');

                // header("Location: index.php");
                echo "GUARDADO EXITOSAMENTEE.........";
                exit();
            } else {
                echo "Error al insertar imagen en la base de datos: " . $conn->error;
            }
        }
    } else {
        // Insertar la nueva imagen en la posición seleccionada
        if ($posicion > 0) {
            $sqlInsert = "INSERT INTO ueh_imagenes (nombre, ruta, orden) VALUES ('$nombreArchivo', '$rutaImagen', $posicion)";
            
            if ($conn->query($sqlInsert) === TRUE) {
                header('refresh:1; ../inicioportal.php');

                // header("Location: index.php");
                echo "GUARDADO EXITOSAMENTEE.........";

                exit();
            } else {
                echo "Error al insertar imagen en la base de datos: " . $conn->error;
            }
        } else {
            echo "Posición inválida para la imagen en el carrusel.";
        }
    }
} else {
    echo "Hubo un error al subir la imagen.";
}

$conn->close();
?>
