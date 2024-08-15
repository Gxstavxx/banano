<?php
include "conexion.php";
$id = $_GET['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$sql = $conn->query("UPDATE usuario SET (nombres, apellidos, edad, direccion, encargado, tel_encargado) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombres, $apellidos, $edad, $direccion, $encargado, $tel_encargado);

if($sql == 1){
    header('Location:listar.php');
}
?>  