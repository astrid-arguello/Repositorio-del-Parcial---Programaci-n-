<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    $_SESSION['usuario_id'] = $data['id'];
    header("Location: dashboard.php");
} else {
    echo "Usuario o contraseña incorrectos";
}
?>