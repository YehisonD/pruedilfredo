<?php
include('conexion.php');

$usuario_ingresado = $_POST['usuario'];
$clave_ingresada   = $_POST['clave'];

// Consulta para buscar al usuario
$consulta = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario_ingresado'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    
    // Verificamos la contraseña encriptada
    if (password_verify($clave_ingresada, $fila['clave'])) {
        echo "¡Inicio de sesión exitoso! Bienvenido " . $fila['nombre_usuario'];
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "El usuario no existe.";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>