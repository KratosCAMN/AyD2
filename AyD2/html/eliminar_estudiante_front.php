<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="eliminar_estudiante.css">
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
    <!-- Formulario de filtrado -->
    <form action="eliminar_estudiantes.php" method="POST" id="filtrar-form">
        <label for="filtro">Selecciona un filtro:</label>
        <select name="filtro" id="filtro">
            <option value="genero">Género</option>
            <option value="edad">Edad</option>
            <option value="asignatura">Asignatura</option>
            <option value="nombre">Nombre</option>
        </select>
        <input type="text" name="valor" placeholder="Valor del filtro">
        <button type="submit">Filtrar Estudiantes</button>
    </form>

    </div>
</body>
</html>
