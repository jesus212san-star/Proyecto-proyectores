<?php
include 'conexion.php';

$query = "SELECT * FROM proyectores ORDER BY id DESC";
$resultado = $conexion->query($query);

$proyectores = array();

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $proyectores[] = $fila;
    }
    echo json_encode($proyectores, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array("mensaje" => "No hay registros disponibles"));
}

$conexion->close();
?>
