<?php session_start();
require './config.php';
require '../functions.php';

// Conexión al BD
$conexion = conexion($bd_config); 

if(!$conexion) { //Sí no existe la conexion a la BD
    header('Location: error.php');
}

//Eliminar fila (eliminar post)
$id = cleanData($_GET['id']); // Trae y limpia el contenido id del GET

if (!$id) {
    header('Location: ' . RUTA . 'admin');
}

$statement = $conexion -> prepare("DELETE FROM articulos WHERE id = ?");
$statement -> execute([$id]);
header('Location: ' . RUTA . 'admin');