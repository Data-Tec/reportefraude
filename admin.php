<!DOCTYPE html>
<html>
<head>
    <title>Administrador de Base de Datos</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <div class="container">
        <h1>Administrador de Base de Datos</h1>
        
        <div class="form-container">
            <form action="crear_registro.php" method="POST">
                <h2>Crear Registro</h2>
                <label for="id_reportado">ID de Usuario Reportado:</label>
                <input type="text" id="id_reportado" name="id_reportado" required>
                
                <label for="descripcion_reporte">Descripción de Reporte:</label>
                <textarea id="descripcion_reporte" name="descripcion_reporte" required></textarea>
                
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required>
                
                <label for="id_reporta">ID de Usuario que Reporta:</label>
                <input type="text" id="id_reporta" name="id_reporta" required>
                
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais" required>
                
                <label for="canal_reporte">Canal de Reporte:</label>
                <input type="text" id="canal_reporte" name="canal_reporte" required>
                
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" required>
                
                <input type="submit" value="Crear Registro">
            </form>
        </div>

        <div class="form-container">
            <form action="consultar_registro.php" method="POST">
                <h2>Consultar Registro</h2>
                <label for="id_reportado_consultar">ID de Usuario Reportado:</label>
                <input type="text" id="id_reportado_consultar" name="id_reportado" required>
                <input type="submit" value="Consultar Registro">
            </form>
        </div>
        
        <div class="form-container">
            <form action="eliminar.php" method="POST">
                <h2>Eliminar Registro</h2>
                <label for="id_reportado_eliminar">ID de Usuario Reportado:</label>
                <input type="text" id="id_reportado_eliminar" name="id_reportado" required>
                <input type="submit" value="Eliminar Registro">
            </form>
        </div>
        
        <div class="form-container">
            <form action="editar_registro.php" method="POST">
                <h2>Editar Registro</h2>
                <label for="id_reportado_editar">ID de Usuario Reportado:</label>
                <input type="text" id="id_reportado_editar" name="id_reportado" required>
                <input type="submit" value="Editar Registro">
            </form>
        </div>
        
        <div class="form-container">
            <form action="descargar_excel.php" method="POST">
                <h2>Descargar en Excel</h2>
                <input type="submit" value="Descargar Excel">
            </form>
        </div>
    </div>
</body>
</html>
