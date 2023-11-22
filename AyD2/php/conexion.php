<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "registro";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_errno);
}


?>