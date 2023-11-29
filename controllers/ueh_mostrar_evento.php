<?php

require_once("../../xse_conexion/xse_database.php");


$sql = "SELECT * FROM ueh_eventos";

$resultados = array();


if($result = $conn->query($sql)){
    while($fila = $result->fetch_assoc()){
        $resultados[] = $fila;
    }
    $result->free();
}

$conn->close();

echo json_encode(array("data" => $resultados));




?>