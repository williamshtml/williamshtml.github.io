<?php
if (!isset($_GET['nombre']) || !isset($_GET['telefono']) || !isset($_GET['fecha']) || !isset($_GET['hora']) || !isset($_GET['personas'])) {
    header("Location: formulario.php");
    exit();
}

$nombre = htmlspecialchars($_GET['nombre']);
$telefono = htmlspecialchars($_GET['telefono']);
$fecha = htmlspecialchars($_GET['fecha']);
$hora = htmlspecialchars($_GET['hora']);
$personas = htmlspecialchars($_GET['personas']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="card shadow-lg p-4 border rounded">
        <h2 class="text-center text-success">¡Reserva Confirmada!</h2>
        <p class="text-center">Tu reserva ha sido registrada con éxito.</p>
        <hr>
        <h4 class="mb-3 text-center">Detalles de la Reserva</h4>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nombre:</strong> <?php echo $nombre; ?></li>
            <li class="list-group-item"><strong>Teléfono:</strong> <?php echo $telefono; ?></li>
            <li class="list-group-item"><strong>Fecha:</strong> <?php echo $fecha; ?></li>
            <li class="list-group-item"><strong>Hora:</strong> <?php echo $hora; ?></li>
            <li class="list-group-item"><strong>Personas:</strong> <?php echo $personas; ?></li>
        </ul>
        <div class="mt-4 d-grid gap-2">
            <a href="formulario.php" class="btn btn-primary">Volver al formulario</a>
            <a href="admin.php" class="btn btn-secondary">Ir al Panel de Administración</a>
        </div>
    </div>
</div>
</body>
</html>


