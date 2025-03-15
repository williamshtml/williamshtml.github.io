<?php
require 'conexion.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: listar_reservas.php");
    exit();
}

$stmt = $conexion->prepare("SELECT * FROM reservas WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$reserva = $stmt->get_result()->fetch_assoc();
if (!$reserva) {
    echo "Reserva no encontrada.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reserva</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="reservascss/style.css">
    <link rel="stylesheet" href="reservascss/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="card p-4 shadow-lg">
        <h2 class="text-center mb-4">Editar Reserva</h2>
        <form action="guardar_edicion.php" method="POST" class="row g-3">
            <input type="hidden" name="id" value="<?php echo $reserva['id']; ?>">

            <div class="col-12">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $reserva['nombre']; ?>" required>
            </div>

            <div class="col-12">
                <label class="form-label">Teléfono:</label>
                <input type="tel" name="telefono" class="form-control" value="<?php echo $reserva['telefono']; ?>" required>
            </div>

            <div class="col-12">
                <label class="form-label">Fecha:</label>
                <input type="date" name="fecha" class="form-control" value="<?php echo $reserva['fecha']; ?>" required>
            </div>

            <div class="col-12">
                <label class="form-label">Hora:</label>
                <input type="time" name="hora" class="form-control" value="<?php echo $reserva['hora']; ?>" required>
            </div>

            <div class="col-12">
                <label class="form-label">Número de Personas:</label>
                <input type="number" name="personas" class="form-control" value="<?php echo $reserva['personas']; ?>" required>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success w-100 mb-2">Guardar Cambios</button>
                <a href="admin.php" class="btn btn-secondary w-100">Cancelar</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
