<?php
$enlace = mysqli_connect("localhost", "root", "000000", "sis_upel");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/*echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos sis_upel es genial." . PHP_EOL; */

mysqli_close($enlace);
?>
