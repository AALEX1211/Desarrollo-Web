<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Círculo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h2>Resultado del Círculo</h2>
        
        <?php
            // Recibimos la variable enviada desde el formulario HTML
            $radio = $_POST['radio'];

            // Valor de PI (constante sencilla)
            $pi = 3.1416;

            // Fórmulas matemáticas sencillas
            $area = $pi * ($radio * $radio);
            $perimetro = 2 * $pi * $radio;

            // Mostramos los resultados en pantalla
            echo "<p><strong>Radio ingresado:</strong> " . $radio . " cm</p>";
            echo "<p><strong>Área:</strong> " . round($area, 2) . " cm²</p>";
            echo "<p><strong>Perímetro:</strong> " . round($perimetro, 2) . " cm</p>";
        ?>

    </div>
</body>
</html>