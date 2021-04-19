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

// Sí la petición se realizó con éxito
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = cleanData($_POST['titulo']);
    $extracto = cleanData($_POST['extracto']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name']; // Guarda la imagen

    $destino_img = "../" . $blog_config['folder_img'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $destino_img); // sube el archivo en eel destino indicado

    $statement = $conexion -> prepare("INSERT INTO articulos (id, titulo, extracto, texto, thumb) VALUES (null, ?, ?, ?, ?)");

    $statement -> execute( [$titulo, $extracto, $texto, $_FILES['thumb']['name']] );

    header('Location: ' . RUTA . 'admin');
}

require '../views/create.view.php';
?>