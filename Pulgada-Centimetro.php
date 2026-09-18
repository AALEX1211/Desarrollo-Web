<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Pulgadas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h2>Conversión de Pulgadas a Centímetros</h2>
        <!-- Envíos a centimetros.php por POST -->
        <form action="centimetros.php" method="POST">
            <label for="pulgadas">Cantidad en pulgadas:</label>
            <input type="number" step="any" name="pulgadas" id="pulgadas" required placeholder="Ejemplo: 10">
            
            <button type="submit">Convertir</button>
        </form>
    </div>
</body>
</html>