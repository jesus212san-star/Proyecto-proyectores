<?php
// Permitir el acceso desde la aplicación móvil Android
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

$server = "tu_servidor_host"; // Cambia por tu servidor de base de datos en línea
$user = "tu_usuario_bd";     // Cambia por tu usuario de base de datos
$pass = "tu_contraseña_bd";  // Cambia por tu contraseña de base de datos
$bd = "tu_nombre_bd";        // Cambia por el nombre de tu base de datos

$conexion = new mysqli($server, $user, $pass, $bd);

if ($conexion->connect_error) {
    die(json_encode(array("error" => "Error de conexión: " . $conexion->connect_error)));
}
?>
