<?php

if (isset($_POST['filtrar'])) {
  include("conexion.php");

  if (empty($_POST['valor'])){
    echo"Rellene la casilla Valor del Filtro";
  }
  else{
    $filtro = $_POST['filtro'];
    $valor = $_POST['valor'];  

    $sql = "SELECT * FROM estudiantes WHERE ";

    if ($filtro === "genero") {
        $sql .= "genero = '$valor'";
    } elseif ($filtro === "programaAcademico") {
        $sql .= "programa_academico = '$valor'";
    } elseif ($filtro === "nombre") {
        $sql .= "nombre LIKE '%$valor%'";
    }

    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Resultados de la búsqueda:</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Género</th><th>Programa Académico</th></tr>";
        

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["genero"] . "</td>";
            echo "<td>" . $row["programa_academico"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
    $conexion->close();
  }
}

?>