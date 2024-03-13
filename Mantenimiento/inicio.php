<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Mantenimiento de Equipos Biomédicos</title>
    <link rel="stylesheet" href="css/inicio.css">
    
</head>
<body>
    <div class="container">
        <h1>Registro de Mantenimiento de Equipos Biomédicos</h1>
        <form id="registroEquipoForm" action="registrar_equipo.php" method="post">
        <div class="form-group">
                <label for="idEquipo">ID del Equipo:</label>
                <input type="text" id="idEquipo" name="id" required>
            </div>
            <div class="form-group">
                <label for="nombreEquipo">Nombre del Equipo:</label>
                <input type="text" id="nombreEquipo" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="marcaEquipo">Marca del equipo:</label>
                <input type="text" id="marcaEquipo" name="marcaEquipo" required>
            </div>
            <div class="form-group">
                <label for="modeloEquipo">Modelo del equipo:</label>
                <input type="text" id="modeloEquipo" name="modeloEquipo" required>
            </div>
            <div class="form-group">
                <label for="serieEquipo">Serie del equipo:</label>
                <input type="text" id="serieEquipo" name="serieEquipo" required>
            </div>
            <div class="form-group">
                <label for="tipoAdquisicion">Tipo de Adquisicion:</label>
                <select id="tipoAdquisicion" name="tipoAdquisicion" required>
                    <option>Compra</option><option>Arriendo</option><option>Comodato</option>
                </select>
            </div>
            <div class="form-group">
                <label for="proveedor">Proveedor:</label>
                <input type="text" id="proveedor" name="proveedor" required>
            </div>
            <div class="form-group">
                <label for="fabricante">Fabricante:</label>
                <input type="text" id="fabricante" name="fabricante" required>
            </div>
            <div class="form-group">
                <label for="fechaFabricacion">Fecha de Fabricacion:</label>
                <input type="date" id="fechaFabricacion" name="fechaFabricacion" required>
            </div>
            <div class="form-group">
                <label for="fechaCompra">Fecha de Compra:</label>
                <input type="date" id="fechaCompra" name="fechaCompra" required>
            </div>
            <div class="form-group">
                <label for="fechaInstalacion">Fecha de Instalacion:</label>
                <input type="date" id="fechaInstalacion" name="fechaInstalacion" required>
            </div>
            <div class="form-group">
                <label for="calibracion">Calibracion:</label>
                <input type="date" id="calibracion" name="calibracion" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="accesorios">Accesorios:</label>
                <input type="text" id="accesorios" name="accesorios" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" required>
            </div>
            <div class="form-group">
                <label for="clasificacionUso">Clasficacion por Uso:</label>
                <input type="text" id="clasificacionUso" name="clasificacionUso" required>
            </div>
            <div class="form-group">
                <label for="tipoAlimentacion">Tipo de Alimentacion:</label>
                <input type="text" id="tipoAlimentacion" name="tipoAlimentacion" required>
            </div><div class="form-group">
                <label for="tipoInstalacion">Tipo de Instalacion:</label>
                <input type="text" id="tipoInstalacion" name="tipoInstalacion" required>
            </div><div class="form-group">
                <label for="frecuenciaMantenimiento">Frecuencia de Mantenimiento:</label>
                <input type="text" id="frecuenciaMantenimiento" name="frecuenciaMantenimiento" required>
            </div><div class="form-group">
                <label for="caracteristicasTecnicas">Caracteristicas Tecnicas:</label>
                <input type="text" id="caracteristicasTecnicas" name="caracteristicasTecnicas" required>
            </div><div class="form-group">
                <label for="calibracion">Calibracion:</label>
                <input type="text" id="calibracion" name="calibracion" required>
            </div><div class="form-group">
                <label for="tipoMantenimiento">Tipo de Mantenimiento:</label>
                <input type="text" id="tipoMantenimiento" name="tipoMantenimiento" required>
            </div>
            <div class="form-group">
                <label for="procedimiento">Procedimiento:</label>
                <input type="text" id="procedimiento" name="procedimiento" required>
            </div>
            <button type="submit">Registrar Equipo</button>
        </form>
    </div>
</body>
</html>