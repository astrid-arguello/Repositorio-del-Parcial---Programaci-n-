<?php
$conn = new mysqli("localhost", "root", "12345", "banco_db");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>