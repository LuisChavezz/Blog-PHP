<?php

require 'admin/config.php';
require './functions.php';

// Conexión al BD
$conexion = conexion($bd_config);

if(!$conexion) { //Sí no existe la conexion a la BD
    header('Location: error.php');
}


// Guardar ID del post
$id_article = id_article($_GET['id']);

if (empty($id_article)){ // Sí no hay id en GET, redirigir al index
    header('Location: index.php');
}

// Obtener post por ID
$post = getPost_ID($conexion, $id_article);

if(!$post) { //Sí no existe el post
    header('Location: index.php');
}


require 'views/single.view.php';
?>