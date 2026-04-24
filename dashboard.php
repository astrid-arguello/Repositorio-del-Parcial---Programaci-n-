<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];

// VALIDACIÓN + INSERCIÓN
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $monto = $_POST['monto'];

    if ($monto > 0 && is_numeric($monto)) {
        $sql = "INSERT INTO movimientos (tipo, monto, usuario_id)
                VALUES ('$tipo', '$monto', '$usuario_id')";
        $conn->query($sql);
    } else {
        echo "<p style='color:red;'>Monto inválido</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Banco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Bienvenido al Banco</h2>

<a href="index.php">Cerrar sesión</a>

<h3>Registrar Movimiento</h3>

<form method="POST">
    <select name="tipo">
        <option value="deposito">Depósito</option>
        <option value="retiro">Retiro</option>
    </select>
    <input type="number" name="monto" required>
    <button type="submit">Guardar</button>
</form>

<h3>Historial de Movimientos</h3>

<table>
<tr>
    <th>Tipo</th>
    <th>Monto</th>
    <th>Fecha</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM movimientos WHERE usuario_id='$usuario_id' ORDER BY fecha DESC");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['tipo']}</td>
            <td>$ {$row['monto']}</td>
            <td>{$row['fecha']}</td>
          </tr>";
}
?>

</table>

</body>
</html>