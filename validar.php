<?php
// validar.php
session_start();
include('conexion.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];

try {
    // CAMBIO CLAVE: Hemos cambiado 'password' por 'clave' para que coincida con tu Railway
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = :user AND clave = :pass";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':user', $usuario);
    $stmt->bindParam(':pass', $password);
    $stmt->execute();

    $usuario_encontrado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario_encontrado) {
        // Guardamos el nombre en la sesión y entramos
        $_SESSION['usuario'] = $usuario_encontrado['nombre_usuario'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Usuario o clave incorrectos'); window.location='index.php';</script>";
    }
} catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
?>