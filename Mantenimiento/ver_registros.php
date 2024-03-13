<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Registros</title>
</head>
<style>
table {
  width: 100%;
  background: white;
  margin-bottom: 1.25em;
  border: solid 1px #dddddd;
  border-collapse: collapse;
  border-spacing: 0;
}

table tr th,
table tr td {
  padding: 0.5625em 0.625em;
  font-size: 0.875em;
  color: #222222;
  border: 1px solid #dddddd;
}

table tr.even,
table tr.alt,
table tr:nth-of-type(even) {
  background: #f9f9f9;
}
</style>
<body>
<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";
$username = "root";
$password = "";
$database = "bd_mantenimiento";

$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consulta SQL para seleccionar todos los registros de la tabla equipos
$sql = "SELECT * FROM equipos";
$result = mysqli_query($conn, $sql);

// Inicio de la tabla
echo "<table>";

if (mysqli_num_rows($result) > 0) {
    // Obtener los nombres de las columnas
    $columns = array_keys(mysqli_fetch_assoc($result));
    
    // Reiniciar el puntero del resultado
    mysqli_data_seek($result, 0);
    
    // Cabecera de la tabla
    echo "<tr>";
    foreach ($columns as $column) {
        echo "<th>" . ucfirst(str_replace('_', ' ', $column)) . "</th>";
    }
    echo "</tr>";
    
    // Mostrar los datos
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='" . count($columns) . "'>No se encontraron registros.</td></tr>";
}

// Fin de la tabla
echo "</table>";

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

</body>
</html>
