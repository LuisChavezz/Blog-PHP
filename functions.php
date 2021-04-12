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
    return isset($_GET['page']) ? (int)$_GET['page'] : 1;
}

// Obtener posts
function getPost ($post_per_page, $conexion) {
    $inicio = ( current_page() > 1 ) ? current_page() * $post_per_page - $post_per_page : 0; // Cálculo para saber cuales artículos se mostrarán segun el número de página

    $statement = $conexion -> prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_per_page");
    $statement -> execute();

    return $statement -> fetchAll();
}

// Limpiará el 'id' obtenido del GET
function id_article($id){
    return (int)cleanData($id);
}

// Obtener post en específico
function getPost_ID($conexion, $id){
    $result = $conexion -> query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $result = $result -> fetch();
    return ($result) ? $result : false;
        // Si existe resultado, lo devuelve. Si no, devulvee falso.
}

// Cambiar formato de la fecha almacenada del post
function fecha ($fecha) {
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    $dia = date('d', $timestamp) - 1;
    $mes = date('m', $timestamp) - 1;
    $anho = date('Y', $timestamp);

    $fecha = "$dia de " . $meses[$mes] . " del $anho";
    return $fecha;
}






?>