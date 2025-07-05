<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "portafolio";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string(trim($_POST['nombre']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $telefono = $conn->real_escape_string(trim($_POST['telefono']));
    $descripcion = $conn->real_escape_string(trim($_POST['descripcion']));

    if (empty($nombre) || empty($email) || empty($descripcion)) {
        header("Location: contacto.html?enviado=0");
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contacto.html?enviado=0");
        exit;
    }

    $sql = "INSERT INTO mensajes (nombre, email, telefono, descripcion) VALUES ('$nombre', '$email', '$telefono', '$descripcion')";
    if ($conn->query($sql) === TRUE) {
        header("Location: contacto.html?enviado=1");
        exit;
    } else {
        header("Location: contacto.html?enviado=0");
        exit;
    }
} else {
    echo "Método de solicitud no válido.";
}
$conn->close();
?>