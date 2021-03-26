<?php

require 'admin/config.php';
require 'functions.php';

// Conexión al BD
$conexion = conexion($bd_config); 

if(!$conexion) { //Sí existe la conexion a la BD
    header('Location: error.php');
}

// Get de los posts
$posts = getPost ($blog_config['post_per_page'], $conexion);

if(!$posts) { //Sí no hay posts
    header('Location: error.php');
}

//
require 'views/index.view.php';
?>