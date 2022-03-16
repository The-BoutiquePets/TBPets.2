<?php

$con= mysqli_connect("localhost", "root", "", "mvc") or die("error");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$insert = "INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `clave`) VALUES ('$id', '$nombre', '$apellido', '$correo', '$clave');";
if ($con->query($insert) === true) {
    echo "Registro exitoso";
}



?>