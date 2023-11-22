<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrar Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="filtrar_estudiante.css">
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
    <form method="post">
        <label for="filtro">SELECIONA UN FILTRO</label>
        <select name="filtro" id="filtro">
            <option value="genero">Género</option>
            <option value="programaAcademico">Asignatura</option>
            <option value="nombre">Nombre</option>
        </select>
        <input type="text" name="valor" placeholder="Valor del filtro">
        <button type="submit" name="filtrar">Filtrar Estudiantes</button>
        <div id="resultados">
            <?php include('C:\wamp64\www\AyD2\php\filtrar_back.php'); ?>
        </div>
    </form>

    
</body>
</html>
