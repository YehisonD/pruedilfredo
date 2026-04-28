<?php
// Usamos getenv para leer las variables que configuraremos en el panel de Render
$servidor   = getenv('DB_HOST');
$usuario    = getenv('DB_USER');
$clave      = getenv('DB_PASS');
$base_datos = getenv('DB_NAME');
$puerto     = getenv('DB_PORT');

$conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos, $puerto);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>