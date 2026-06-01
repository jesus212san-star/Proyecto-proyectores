<?php
include 'conexion.php';

// Validación básica obligatoria: verificar campos vacíos
if (!empty($_POST['responsable']) && !empty($_POST['aula']) && !empty($_POST['equipo']) && !empty($_POST['estado'])) {
    
    $responsable = $conexion->real_escape_string($_POST['responsable']);
    $aula = $conexion->real_escape_string($_POST['aula']);
    $equipo = $conexion->real_escape_string($_POST['equipo']);
    $estado = $conexion->real_escape_string($_POST['estado']);

    $query = "INSERT INTO proyectores (responsable, aula, equipo, estado) VALUES ('$responsable', '$aula', '$equipo', '$estado')";
    
    if ($conexion->query($query) === TRUE) {
        echo json_encode(array("status" => "success", "mensaje" => "Registro guardado exitosamente"));
    } else {
        echo json_encode(array("status" => "error", "mensaje" => "Error al guardar: " . $conexion->error));
    }
} else {
    echo json_encode(array("status" => "error", "mensaje" => "Error: Campos vacíos detectados"));
}

$conexion->close();
?>
