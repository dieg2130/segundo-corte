<?php
// Datos de conexión (¡cámbialos por los tuyos!)
$servidor = "localhost";  // Servidor de la base de datos
$usuario = "root";       // Usuario de MySQL
$password = "";          // Contraseña (vacía comúnmente en XAMPP/WAMP)
$basedatos = "hoteles";  // Nombre de tu base de datos

// Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $basedatos);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Opcional: Configurar charset (recomendado)
mysqli_set_charset($conexion, "utf8mb4");
?> 