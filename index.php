
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Citas Médicas</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f0f5fa;
            color: #243447;
        }
        header {
            background: #087eaa;
            color: white;
            padding: 25px;
            text-align: center;
        }
        nav {
            background: #075477;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 12px;
        }
        main {
            text-align: center;
            padding: 65px 20px;
        }
        .panel {
            background: white;
            max-width: 650px;
            margin: auto;
            padding: 35px;
            border-radius: 12px;
        }
        .boton {
            display: inline-block;
            background: #087eaa;
            color: white;
            padding: 13px 25px;
            border-radius: 7px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<header>
    <h1>Sistema Web de Citas Médicas</h1>
    <p>Tu salud es nuestra prioridad</p>
</header>

<nav>
    <a href="index.php">Inicio</a>
    <a href="login.php">Iniciar sesión</a>
    <a href="citas/registrar.php">Agendar cita</a>
</nav>

<main>
    <div class="panel">
        <h2>Bienvenido a nuestro sistema médico</h2>
        <p>
            Gestiona tus citas médicas de manera sencilla,
            rápida y segura.
        </p>
        <a class="boton" href="login.php">
            Acceder al sistema
        </a>
    </div>
</main>

</body>
</html>
