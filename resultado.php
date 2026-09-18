<h1>Resultado</h1>
<?php
if (isset($_REQUEST['num1']) && isset($_REQUEST['num2'])) {
        $num1 = (float) $_REQUEST['num1'];
        $num2 = (float) $_REQUEST['num2'];

        // Operaciones principales
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;

        // Ejemplo de división para probar el redondeo
        $division = ($num2 != 0) ? ($num1 / $num2) : 0;
        $division_redondeada = round($division, 2); // Uso de la función round()

        echo "<h3>Resultados:</h3>";
        echo "Suma: $num1 + $num2 = $suma <br>";
        echo "Resta: $num1 - $num2 = $resta <br>";
        echo "Multiplicación: $num1 * $num2 = $multiplicacion <br>";
        echo "División aproximada (Redondeada): $division_redondeada <br>";
    }
?> 