<?php
require 'conexion.php'; // Conectar a la base de datos

$sql = "SELECT * FROM reservas ORDER BY fecha, hora";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Panel de Administración - Reservas</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Personas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['telefono']; ?></td>
                <td><?php echo $fila['fecha']; ?></td>
                <td><?php echo $fila['hora']; ?></td>
                <td><?php echo $fila['personas']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta reserva?');">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="formulario.php" class="btn btn-success mt-3">Volver al formulario</a>
</div>

</body>
</html>