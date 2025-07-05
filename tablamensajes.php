<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "portafolio";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM mensajes ORDER BY fecha DESC");
echo "<h2>Mensajes recibidos</h2>";
echo "<table border='1' cellpadding='8'><tr><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Descripción</th><th>Fecha</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['nombre']}</td>
        <td>{$row['email']}</td>
        <td>{$row['telefono']}</td>
        <td>{$row['descripcion']}</td>
        <td>{$row['fecha']}</td>
    </tr>";
}
echo "</table>";
$conn->close();
?>