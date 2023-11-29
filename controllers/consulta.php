<?php



class ajax
{

    //FUNCIONES PARA NOTICIA

    public function mostrarNoticia()
    {
        require_once("../../xse_conexion/xse_database.php");

        $sql = "SELECT * FROM ueh_noticias";

        $resultados = array();

        if ($result = $conn->query($sql)) {
            while ($fila = $result->fetch_assoc()) {
                $resultados[] = $fila;
            }
            $result->free();

            $conn->close();

            echo json_encode(array("data" => $resultados));
        } else {
            echo json_encode(array("error" => "Error en la consulta SQL"));
            $conn->close();
        }
    }


    public function insertarNoticia()
    {
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
    }

    public function editarNoticia()
    {
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
    }


    public function eliminarNoticia()
    {

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
    }

    //FUNCIONES PARA EVENTO
    public function mostrarEvento()
    {
        require_once("../../xse_conexion/xse_database.php");

        $sql = "SELECT * FROM ueh_eventos";

        $resultados = array();

        if ($result = $conn->query($sql)) {
            while ($fila = $result->fetch_assoc()) {
                $resultados[] = $fila;
            }
            $result->free();

            $conn->close();

            echo json_encode(array("data" => $resultados));
        } else {
            echo json_encode(array("error" => "Error en la consulta SQL"));
            $conn->close();
        }
    }

    public function insertarEvento()
    {
        require_once("../../xse_conexion/xse_database.php");

        // Recuperar los datos del formulario y limpiarlos
        $nombre_evento  = isset($_POST["nombre_evento"]) ? trim($_POST["nombre_evento"]) : '';
        $fecha_hora     = isset($_POST["fecha_hora"]) ? trim($_POST["fecha_hora"]) : '';
        $lugar_evento   = isset($_POST["lugar_evento"]) ? trim($_POST["lugar_evento"]) : '';
        $estadoeventoueh = isset($_POST["estadoevento"]) ? trim($_POST["estadoevento"]) : '';
        $colorbtnevento = isset($_POST["colorbtneventos"]) ? trim($_POST["colorbtneventos"]) : '';


        // Validar que los campos no estén vacíos
        if (empty($nombre_evento) || empty($fecha_hora) || empty($lugar_evento) || empty($estadoeventoueh) || empty($colorbtnevento)) {
            echo 'Por favor, completa todos los campos.';
        } else {
            // Consulta preparada para evitar inyecciones SQL
            $sql = "INSERT INTO ueh_eventos (nombre_evento, fecha_hora, lugar_evento,estado,color) VALUES (?, ?, ?, ?, ?)";

            // Preparar la consulta
            $stmt = $conn->prepare($sql);

            // Verificar si la consulta se preparó correctamente
            if ($stmt) {
                // Asociar parámetros
                $stmt->bind_param("sssss", $nombre_evento, $fecha_hora, $lugar_evento, $estadoeventoueh, $colorbtnevento);

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
    }

    public function editarEvento()
    {
        require_once("../../xse_conexion/xse_database.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $id = $_POST['id']; // Recuerda validar y sanitizar los datos recibidos
            $nombre_evento      = $_POST['nombre_evento'];
            $fecha_hora         = $_POST['fecha_hora'];
            $lugar_evento       = $_POST['lugar_evento'];
            $estadoevento       = $_POST['estadoevento'];
            $colorbtneventos    = $_POST['colorbtneventos'];


            // Actualizar los datos en la base de datos
            $sql = "UPDATE ueh_eventos SET nombre_evento='$nombre_evento', fecha_hora='$fecha_hora', lugar_evento='$lugar_evento', estado='$estadoevento', color='$colorbtneventos' WHERE id=$id";


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
    }

    public function eliminarEvento()
    {
        require_once("../../xse_conexion/xse_database.php");

        // Obtiene el ID del registro a eliminar
        $id_trabajo = $_POST['id'];
        error_log("ID a eliminar: " . $id_trabajo);
        // Realiza la eliminación en la base de datos
        $sql = "DELETE FROM ueh_eventos WHERE id = $id_trabajo";

        if ($conn->query($sql) === TRUE) {
            // Envía una respuesta exitosa si la eliminación fue exitosa
            echo "Registro eliminado con éxito";
        } else {
            // Envía una respuesta de error si la eliminación falla
            echo "Error al eliminar el registro: " . $conn->error;
        }

        $conn->close();
    }


}



if (isset($_POST['funcion']) && $_POST['funcion'] === 'mostrarNoticia') {
    $mostrarNoticia = new Ajax();
    $mostrarNoticia->mostrarNoticia();
} elseif (isset($_POST['funcion']) && $_POST['funcion'] === 'insertarNoticia') {
    $insertarNoticia = new Ajax();
    $insertarNoticia->insertarNoticia();
} elseif (isset($_POST['funcion']) && $_POST['funcion'] === 'editarNoticia') {
    $editarNoticia = new Ajax();
    $editarNoticia->editarNoticia();
} elseif (isset($_POST['funcion']) && $_POST['funcion'] === 'eliminarNoticia') {
    $eliminarNoticia = new Ajax();
    $eliminarNoticia->eliminarNoticia();
} elseif (isset($_POST['funcion']) && $_POST['funcion'] === 'mostrarEvento') {
    $mostrarEvento = new Ajax();
    $mostrarEvento->mostrarEvento();
}elseif (isset($_POST['funcion']) && $_POST['funcion'] === 'insertarEvento') {
    $insertarEvento = new Ajax();
    $insertarEvento->insertarEvento();
} elseif (isset($_POST['funcion']) && $_POST['funcion'] === 'editarEvento') {
    $editarEvento = new Ajax();
    $editarEvento->editarEvento();
} elseif (isset($_POST['funcion']) && $_POST['funcion'] === 'eliminarEvento') {
    $eliminarEvento = new Ajax();
    $eliminarEvento->eliminarEvento();
}  

else {
    echo json_encode(array("error" => "NO SE PROPORCIONO UNA FUNCION VALIDA.."));
}
