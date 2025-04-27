<?php
include 'config/conex.php';

if (isset($_POST['vender'])) {
    $cantidad = (int) $_POST['cantidad'];
    $valor = (float) $_POST['valor'];

    $query = "INSERT INTO ventas (cantidad, valor) VALUES ($cantidad, $valor)";

    if ($conexion->query($query)) {
        echo "<div class='alert alert-success'>Venta realizada con éxito.</div>";
        echo "<a href='vender.html' class='btn btn-secondary'>Regresar</a>";
    } else {
        echo "<div class='alert alert-danger'>Error al registrar la venta: " . $conexion->error . "</div>";
    }
}
?>
