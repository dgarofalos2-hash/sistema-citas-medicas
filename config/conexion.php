
<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "citas_medicas";

try {

    $conexion = new PDO(
        "mysql:host=$servidor;dbname=$base_datos;charset=utf8mb4",
        $usuario,
        $contrasena
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    die("Error de conexión con la base de datos.");

}
?>
