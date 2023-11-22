<?php
    include('conexion.php');

    if (isset($_POST['register'])) {
        if (empty($_POST["nombre"]) or empty($_POST["fechaNacimiento"]) or empty($_POST["genero"]) or empty($_POST["direccion"]) or empty($_POST["telefono"]) or empty($_POST["email"]) or empty($_POST["programaAcademico"])) {
            echo "Rellene los campos por favor";
        } else {
            $nombre = $_POST["nombre"];
            $fechaNacimiento = $_POST["fechaNacimiento"];
            $genero = $_POST["genero"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $email = $_POST["email"];
            $programaAcademico = $_POST["programaAcademico"];

            $nombre_imagen1 = $_FILES['fotoCedula']['name'];
            $temporal1 = $_FILES['fotoCedula']['tmp_name'];
            $carpeta1 = '../img';
            $ruta1 = $carpeta1.'/'.$nombre_imagen1;
            move_uploaded_file($temporal1,$carpeta1.'/'.$nombre_imagen1);

            $nombre_imagen2 = $_FILES['documentacionEspecial']['name'];
            $temporal2 = $_FILES['documentacionEspecial']['tmp_name'];
            $carpeta2 = '../img';
            $ruta2 = $carpeta2.'/'.$nombre_imagen2;
            move_uploaded_file($temporal2,$carpeta2.'/'.$nombre_imagen2);

            $sql = "INSERT INTO estudiantes (nombre, fecha_nacimiento, genero, direccion, telefono, correo_electronico, programa_academico, foto_cedula, documentacion_especial) VALUES ('$nombre', '$fechaNacimiento', '$genero', '$direccion', '$telefono', '$email', '$programaAcademico', '$ruta1', '$ruta2')";

            if ($conexion->query($sql) === TRUE) {
                // Mostrar un mensaje emergente de confirmación
                echo '<script>
                        alert("Estudiante registrado con éxito.");
                </script>';
            } else {
                echo "Error al registrar estudiante: " . $conexion->error;
            }
        }
    }
?>