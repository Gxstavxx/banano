<?php
include "conexion.php";

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$p = $_POST['p'];

// Preparar la consulta SQL
$stmt = $conn->prepare("INSERT INTO usuario (nombre, apellido, correo, pass) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $apellido, $correo, $p);

// Ejecutar la consulta
if ($stmt->execute()) {
    // Redirigir a la página listar.php después de la inserción exitosa
    header('Location: listar.php');
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conn->close();
?>
