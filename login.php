
<?php
session_start();
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensaje = "El sistema de autenticación se conectará con la base de datos MySQL en la siguiente etapa.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Citas Médicas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eaf3f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .contenedor {
            background: white;
            width: 340px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0002;
        }

        h2 {
            text-align: center;
            color: #087eaa;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 11px;
            margin-top: 7px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #087eaa;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .mensaje {
            color: #b45309;
            font-size: 13px;
            margin-top: 15px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #087eaa;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h2>Iniciar Sesión</h2>
    <p style="text-align:center">
        Sistema Web de Citas Médicas
    </p>

    <form method="POST">
        <label>Correo electrónico:</label>
        <input type="email" name="correo"
               placeholder="Ingrese su correo" required>

        <label>Contraseña:</label>
        <input type="password" name="password"
               placeholder="Ingrese su contraseña" required>

        <button type="submit">Ingresar</button>
    </form>

    <?php if ($mensaje != ""): ?>
        <p class="mensaje">
            <?= htmlspecialchars($mensaje) ?>
        </p>
    <?php endif; ?>

    <a href="index.php">Volver al inicio</a>

</div>

</body>
</html>
