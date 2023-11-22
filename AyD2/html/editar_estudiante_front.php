<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Desplegable y Registro de Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="editar_estudiante.css">
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
    <div>
        <div class="registro-estudiante">
            <h2>Registro de Estudiantes</h2>
            <form id="formularioRegistro">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
    
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
    
                <label for="genero">Género:</label>
                <select id="genero" name="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
    
                <label for="direccion">Dirección de Contacto:</label>
                <input type="text" id="direccion" name="direccion" required>
    
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono">
    
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email">
    
                <label for="programaAcademico">Programa Académico:</label>
                <select id="text" id="programaAcademico">
                    <option value="INGENIERIA">INGENIERIA</option>
                    <option value="SALUD">SALUD</option>
                    <option value="HUMANIDADES">HUMANIDADES</option>
                    <option value="ECONOMIA">ECONOMIA</option>
                </select>
                <button type="submit">Registrar</button>
            </form>
        </div>
        <div class="center-container">
            <div class="form-container">
                <h1>CEDULA O PASAPORTE</h1>
                <form action="procesar.php" method="post" enctype="multipart/form-data">
                    <label for="imagen">Selecciona una imagen</label>
                    <input type="file" name="imagen" id="imagen" accept="image/*" required>
                    <br>
                    <input type="submit" value="Subir Imagen">
                </form>
            </div>
        </div>
        <div class="center-container2">
            <div class="form-container2">
                <h1>DOCUMENTACION MEDICA ESPECIAL</h1>
                <form action="procesar.php" method="post" enctype="multipart/form-data">
                    <label for="imagen">Selecciona una imagen</label>
                    <input type="file" name="imagen" id="imagen" accept="image/*" required>
                    <br>
                    <input type="submit" value="Subir Imagen">
                </form>
            </div>
        </div>
    </div>
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