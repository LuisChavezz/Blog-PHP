<?php

// Iniciar la conexion a la BD
function conexion ($bd_config) { 
    // Conexión a la base de datos
    try {
        $conexion = new PDO('mysql:host=localhost;bdname=blog_practica', 'root', '');
        return $conexion;

    } catch (PDOException $e){
        return false;
    }
}

// Limpiar datos ingresados por el usuario
function cleanData ($data) {
    $data = htmlspecialchars(stripslashes(trim($data)));
    return $data;
}


?>