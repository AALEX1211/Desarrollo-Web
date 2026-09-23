<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    echo "<h2>Datos Recibidos</h2>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
    echo "<p><strong>Edad:</strong> " . htmlspecialchars($edad) . " años</p>";
?>