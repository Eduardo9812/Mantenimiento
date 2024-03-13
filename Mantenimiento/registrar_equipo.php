<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establecer conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bd_mantenimiento";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Recibir y procesar los datos del formulario
    $nombre = $_POST['nombre'];
    $marcaEquipo = $_POST['marcaEquipo'];
    $modeloEquipo = $_POST['modeloEquipo'];
    $serieEquipo = $_POST['serieEquipo'];
    $tipoAdquisicion = $_POST['tipoAdquisicion'];
    $proveedor = $_POST['proveedor'];
    $fabricante = $_POST['fabricante'];
    $fechaFabricacion = $_POST['fechaFabricacion'];
    $fechaCompra = $_POST['fechaCompra'];
    $fechaInstalacion = $_POST['fechaInstalacion'];
    $precio = $_POST['precio'];
    $accesorios = $_POST['accesorios'];
    $clasificacionUso = $_POST['clasificacionUso'];
    $tipoAlimentacion = $_POST['tipoAlimentacion'];
    $tipoInstalacion = $_POST['tipoInstalacion'];
    $frecuenciaMantenimiento = $_POST['frecuenciaMantenimiento'];
    $caracteristicasTecnicas = $_POST['caracteristicasTecnicas'];
    $calibracion = $_POST['calibracion'];
    $tipoMantenimiento = $_POST['tipoMantenimiento'];
    $procedimiento = $_POST['procedimiento'];

    // Preparar la consulta SQL de inserción
    $sql = "INSERT INTO equipos ( nombre, marca, modelo, serie, adquisicion_id, proveedor_id, fabricante, fecha_fabricacion,
    fecha_compra, fecha_instalacion, precio, accesorio_id, clasificacionuso_id, alimentacion_id, instalacion_id,
    frecuencia_mtto, caracteristicas_tecn, calibracion_id, tipomtto_id, procedimiento_id) 
    VALUES ('$nombre', '$marcaEquipo', '$modeloEquipo', '$serieEquipo', '$tipoAdquisicion', '$proveedor', '$fabricante',
    '$fechaFabricacion', '$fechaCompra', '$fechaInstalacion', '$precio', '$accesorios',
    '$clasificacionUso', '$tipoAlimentacion', '$tipoInstalacion', '$frecuenciaMantenimiento', '$caracteristicasTecnicas',
    '$calibracion', '$tipoMantenimiento', '$procedimiento')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Registro insertado correctamente.";
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
