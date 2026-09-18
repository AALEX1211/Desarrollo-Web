<html>
    <head>
        <title>Operaciones</title>
    </head>
    <body>
        <h1>Operaciones</h1>
        <p>Esta es una página simple con algunas operaciones básicas.</p>
    </body>
</html>

<?php
// Función para sumar dos números
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;

echo "La suma de $num1 y $num2 es: $suma<br>"; // La suma de 4 y 7 es: 11

// Función para restar dos números
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;

echo "La resta de $num1 y $num2 es: $resta<br>"; // La resta de 10 y 3 es: 7

// Función para multiplicar dos números
$num1 = 5;
$num2 = 6;
$producto = $num1 * $num2;

echo "El producto de $num1 y $num2 es: $producto<br>"; // El producto de 5 y 6 es: 30

// Función para dividir dos números
$num1 = 20;
$num2 = 4;
$division = $num1 / $num2;

echo "La división de $num1 y $num2 es: $division<br>"; // La división de 20 y 4 es: 5

// Función para la potenciación de un número
$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;
echo "La potencia de $base elevado a $exponente es: $potencia<br>"; //la potencia de 2 elevado a 3 es: 8

// Función para calcular el módulo de dos números
$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;
echo "El módulo de $num1 y $num2 es: $modulo<br>"; // El módulo de 15 y 4 es: 3

// Funcion para redondear un número round(),ceil(),floor()
$numero = 4.6;

$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);

echo "El número redondeado es: $redondeado<br>"; // EL número redondeado es: 5
echo "El número redondeado hacia arriba es: $redondeado_arriba<br>"; // El número redondeado hacia arriba es: 5
echo "El número redondeado hacia abajo es: $redondeado_abajo<br>"; // EL número redondeado hacia abajo es: 4

echo (5 % 3) . "<br>"; // muestra 2
echo (5 % -3) . "<br>"; // muestra 2
echo (-5 % 3) . "<br>"; // muestra -2
echo (-5 % -3) . "<br>"; // muestra -2

// Función para calcular el valor absoluto de un número
$numero = -7;
$valor_absoluto = abs($numero);

echo "El valor absoluto de $numero es: $valor_absoluto<br>"; // El valor absoluto de -7 es: 7

?>