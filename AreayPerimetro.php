<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Círculo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h2>Área y Perímetro de un Círculo</h2>
        <!-- Formulario que envía los datos a circulo.php por método POST -->
        <form action="circulo.php" method="POST">
            <label for="radio">Ingresa el radio (cm):</label>
            <input type="number" step="any" name="radio" id="radio" required placeholder="Ejemplo: 5">
            
            <button type="submit">Calcular</button>
        </form>
    </div>
</body>

</html>
