<?php
// validar.php
session_start();
include('conexion.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Consulta preparada para evitar ataques
$sql = "SELECT * FROM usuarios WHERE nombre_usuario = :user AND password = :pass";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':user', $usuario);
$stmt->bindParam(':pass', $password);
$stmt->execute();

$usuario_encontrado = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario_encontrado) {
    // Si es correcto, guardamos la sesión y vamos al dashboard
    $_SESSION['usuario'] = $usuario_encontrado['nombre_usuario'];
    header("Location: dashboard.php");
} else {
    // Si es incorrecto, volvemos al login con un error
    echo "<script>alert('Datos incorrectos'); window.location='index.php';</script>";
}
?>