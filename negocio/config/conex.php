<?php
$conexion = new mysqli("localhost", "root", "", "taller_bootstrap");

if ($conexion->connect_error) {
    die("Error: No se pudo establecer conexión con la base de datos.");
}
?>
