<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $personas = filter_input(INPUT_POST, 'personas', FILTER_VALIDATE_INT);

    if (!$nombre || !$telefono || !$fecha || !$hora || !$personas) {
        die("Datos no válidos.");
    }

    $sql = "INSERT INTO reservas (nombre, telefono, fecha, hora, personas) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssi", $nombre, $telefono, $fecha, $hora, $personas);

    if ($stmt->execute()) {
        header("Location: confirmacion.php?nombre=$nombre&telefono=$telefono&fecha=$fecha&hora=$hora&personas=$personas");
        exit();
    } else {
        echo "Error al guardar la reserva.";
    }

    $stmt->close();
    $conexion->close();
}
?>
