<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$base_de_datos = "reservas";

$conexion = new mysqli($host, $usuario, $clave, $base_de_datos);
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
