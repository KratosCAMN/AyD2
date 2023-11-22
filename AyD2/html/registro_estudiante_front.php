<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Desplegable y Registro de Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="registro_estudiante.css">
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="registro_estudiante_front.php" class="menu-btn">REGISTRAR</a></li>
            <li><a href="eliminar_estudiante_front.php" class="menu-btn">BUSCAR</a></li>
            <li><a href="filtrar_estudiante_front.php" class="menu-btn">FILTRAR</a></li>
            <li><a href="editar_estudiante_front.php" class="menu-btn">EDITAR</a></li>
        </ul>
    </div>

    <form method='post' id='formularioRegistro' enctype="multipart/form-data">
        <?php include('C:\wamp64\www\AyD2\php\conexion.php'); ?>
        <div class="registro-estudiante">
            <h2>Registro de Estudiantes</h2>
            <div class="padre">
                <div class="nombre">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" pattern="[a-zA-Z ]+" required>
                </div>
                <div class="fechaNacimiento">
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" min="1900-01-01" max="2017-01-01" id="fechaNacimiento" name="fechaNacimiento" required>
                </div>
                <div class="genero">
                    <label for="genero">Género:</label>
                    <select id="genero" name="genero"required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class = "direccion">
                    <label for="direccion">Dirección de Contacto:</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>
                <div class="telefono">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono"pattern="[0-9]+"required>
                </div>
                <div class = "email">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email"required>
                </div>
                <div class="programaAcademico">
                    <label for="text">Programa Académico:</label required>
                    <select id="text" name="programaAcademico">
                        <option value="INGENIERIA">INGENIERIA</option>
                        <option value="SALUD">SALUD</option>
                        <option value="HUMANIDADES">HUMANIDADES</option>
                        <option value="ECONOMIA">ECONOMIA</option>
                    </select>
                    
                </div>
                <button type="submit" name="register">Registrar</button>
            </div>
        </div>
        <div class="center-container">
            <div class="form-container">
                <h1>CEDULA O PASAPORTE</h1>
                <label for="fotoCedula">Selecciona una imagen</label>
                <input type="file" name="fotoCedula" id="fotoCedula" accept="image/*" required>
                <br>
            </div>
        </div>
        <div class="center-container2">
            <div class="form-container2">
                <h1>DOCUMENTACION MEDICA ESPECIAL</h1>
                <label for="documentacionEspecial">Selecciona una imagen</label>
                <input type="file" name="documentacionEspecial" id="documentacionEspecial" accept="image/*" required>
                <br>
            </div>
        </div>
        <?php include('C:\wamp64\www\AyD2\php\registro_Back.php'); ?>
    </form>

    <script>
        // JavaScript para mostrar/ocultar el menú
        function toggleMenu() {
            const menu = document.getElementById("menu");
            menu.classList.toggle("show");

            // Habilitar o deshabilitar enlaces
            const links = menu.getElementsByTagName("a");
            for (let link of links) {
                link.disabled = !link.disabled;
            }
        }
    </script>
</body>
</html>
