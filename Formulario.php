<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de entrada del dato</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contenedor">
        <h2>Ingreso de Datos</h2>
        
        <form method="post" action="pagina2.php">
            <label for="nombre">Ingrese su nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ej: Alex" required>

            <label for="edad">Ingrese su Edad:</label>
            <input type="text" name="edad" id="edad" placeholder="Ej: 20" required>

            <input type="submit" value="Confirmar">
        </form>
    </div>

</body>
</html>