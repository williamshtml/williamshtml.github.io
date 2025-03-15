<?php
require 'conexion.php';
//ALTER TABLE reservas AUTO_INCREMENT = 1;

// Verifica si los datos fueron enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibe los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $personas = $_POST['personas'];

    // Prepara la consulta para actualizar los datos
    $stmt = $conexion->prepare("UPDATE reservas SET nombre = ?, telefono = ?, fecha = ?, hora = ?, personas = ? WHERE id = ?");
    $stmt->bind_param("ssssii", $nombre, $telefono, $fecha, $hora, $personas, $id);

    // Ejecuta la consulta
    if ($stmt->execute()) {
        // Si la actualización fue exitosa, redirige a la página de éxito
        header("Location: admin.php");
        exit();
    } else {
        // Si hay un error al ejecutar la consulta
        echo "Error al actualizar la reserva: " . $stmt->error;
    }

    // Cierra la declaración
    $stmt->close();
}
?>

