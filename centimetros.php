<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Conversión</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h2>Resultado de la Conversión</h2>
        
        <?php
            // Recibimos el número de pulgadas del formulario
            $pulgadas = $_POST['pulgadas'];

            // Factor de conversión directo: 1 pulgada = 2.54 cm
            $centimetros = $pulgadas * 2.54;

            // Impresión limpia de resultados
            echo "<p><strong>Pulgadas ingresadas:</strong> " . $pulgadas . " in</p>";
            echo "<p><strong>Equivalente en centímetros:</strong> " . round($centimetros, 2) . " cm</p>";
        ?>

    </div>
</body>
</html>