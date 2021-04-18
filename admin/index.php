<?php session_start();
require './config.php';
require '../functions.php';

// Conexión al BD
$conexion = conexion($bd_config); 

if(!$conexion) { //Sí no existe la conexion a la BD
    header('Location: error.php');
}

// Comprobación de la sesión iniciada
checkSession();

// Get de los posts
$posts = getPost ($blog_config['post_per_page'], $conexion);

require '../views/admin.index.view.php';
?>