<?php

include('conexion.php');

if ($conexion->connect_error) {
    die("ERROR! Conexión a la base de datos fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM usuarios WHERE nombre = '$username' AND contrasena = '$password'";
    $result = $conexion->query($sql);
    
    if ($result->num_rows == 1) {
        header("Location: menu.php");
    } else {
        echo "Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.";
    }
}

$conexion->close();
?>
