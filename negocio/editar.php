<?php
include 'config/conex.php'; // SIN __DIR__

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) $_POST['id'];
    $cantidad = (int) $_POST['cantidad'];
    $valor = (int) $_POST['valor'];

    $query = "UPDATE ventas SET cantidad = $cantidad, valor = $valor WHERE id = $id";

    if ($conexion->query($query)) {
        echo "<div class='alert alert-success'>Venta actualizada con éxito.</div>";
        echo "<a href='editar.html' class='btn btn-secondary'>Regresar</a>";
    } else {
        echo "<div class='alert alert-danger'>Error al actualizar la venta: " . $conexion->error . "</div>";
    }
}
?>
