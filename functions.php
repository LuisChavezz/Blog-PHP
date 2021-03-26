<?php

// Iniciar la conexion a la BD
function conexion ($bd_config) { 
    // Conexión a la base de datos
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['bd'], $bd_config['user'], $bd_config['password']);
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

// Obtener el número de página actual
function current_page () {
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

// Obtener posts
function getPost ($post_per_page, $conexion) {
    $inicio = ( current_page() > 1 ) ? current_page() * $post_per_page - $post_per_page : 0;

    $statement = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_per_page");
    $statement -> execute();

    return $statement -> fetchAll();

}




?>