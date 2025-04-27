-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS hoteles CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE hoteles;

-- Crear tabla habitaciones
CREATE TABLE IF NOT EXISTS habitaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    piso INT NOT NULL,
    estado TINYINT(1) NOT NULL DEFAULT 0, -- 0 = no disponible, 1 = disponible/reservada
    numero INT NOT NULL,
    created DATETIME DEFAULT CURRENT_TIMESTAMP
);
