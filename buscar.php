<?php

require 'admin/config.php';
require 'functions.php';

// Conexión al BD
$conexion = conexion($bd_config); 

if(!$conexion) { //Sí no existe la conexion a la BD
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = cleanData($_GET['busqueda']);

    $statement = $conexion -> prepare("SELECT * FROM articulos WHERE titulo LIKE ? OR texto LIKE ?");
    $statement -> execute(["%$busqueda%", "%$busqueda%"]);
    $resultados = $statement -> fetchAll();

    if (empty($resultados)) {
        header('Location: ' . RUTA . 'index.php');
    }
    
} else {
    header('Location: ' . RUTA . 'index.php');
}

require 'views/buscar.view.php';

?>