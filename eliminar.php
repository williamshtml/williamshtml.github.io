<?php
require 'conexion.php'; // Asegúrate de que el archivo de conexión está en la misma carpeta

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: No se recibió un ID válido.");
}

$id = intval($_GET['id']); // Convierte el ID a un número entero por seguridad

// Verificar si la reserva con ese ID existe antes de eliminar
$verificar = $conexion->prepare("SELECT id FROM reservas WHERE id = ?");
$verificar->bind_param("i", $id);
$verificar->execute();
$verificar->store_result();

if ($verificar->num_rows === 0) {
    die("Error: La reserva con ID $id no existe.");
}
$verificar->close();

// Preparar la consulta para eliminar la reserva
$sql = "DELETE FROM reservas WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    $stmt->close();
    $conexion->close();
    header("Location: admin.php?mensaje=eliminado");
    exit();
} else {
    echo "Error al eliminar la reserva.";
}

$stmt->close();
$conexion->close();
?>
