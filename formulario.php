<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Mesa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="reservascss/style.css">
    <link rel="stylesheet" href="reservascss/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .container {
            max-width: 800px;
            margin-top: 50px;
        }
        .card {
            padding: 40px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 2rem;
            color: #343a40;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 10px;
            padding: 15px;
        }
        .btn {
            padding: 10px 25px;
            border-radius: 25px;
            font-size: 1rem;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .form-label {
            font-weight: bold;
        }
        .text-center {
            text-align: center;
        }
        .d-flex {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2 class="text-center">Reserva tu mesa</h2>
        <form action="guardar_reserva.php" method="POST" class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su nombre" required>
            </div>

            <div class="col-md-6">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Ingrese su teléfono" pattern="[0-9]{9}" required>
            </div>

            <div class="col-md-6">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="hora" class="form-label">Hora:</label>
                <input type="time" id="hora" name="hora" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="personas" class="form-label">Número de Personas:</label>
                <input type="number" id="personas" name="personas" class="form-control" min="1" max="20" required>
            </div>

            <div class="col-12 text-center d-flex">
                <button type="submit" class="btn btn-primary">Reservar</button>
                <a href="index.html" class="btn btn-secondary">Volver al Inicio</a>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
