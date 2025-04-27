<?php
include __DIR__ . '/config/conex.php';

if (!isset($conexion)) {
    die("Error: No se pudo establecer conexión con la base de datos.");
}

$habitacion = isset($_POST['habitaciones']) && is_numeric($_POST['habitaciones']) ? (int) $_POST['habitaciones'] : 0;

if ($habitacion > 0) {
    $query = "UPDATE habitacion SET estado = 0 WHERE id = $habitacion";
    if ($conexion->query($query)) {
        echo "Habitación actualizada exitosamente.";
    } else {
        echo "Error al actualizar la habitación.";
    }
} else {
    echo "Error: ID de habitación no válido.";
}

$conexion->close();
?>
