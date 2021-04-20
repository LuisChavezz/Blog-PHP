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

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Al enviar formulario
    $id = cleanData($_POST['id']);
    $titulo = cleanData($_POST['titulo']);
    $extracto = cleanData($_POST['extracto']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb'];
    $thumb_saved = $_POST['thumb-saved'];

    if (empty($thumb['name'])) { // Sí el usuario no selecciona una imágen, se usara la misma
        $thumb = $thumb_saved;
    } else {
        $destino_img = "../" . $blog_config['folder_img'] . $_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tmp_name'], $destino_img); // sube el archivo en eel destino indicado
        $thumb = $_FILES['thumb']['name'];
    }

    // Edición de la Fila en la DB
    $statement = $conexion -> prepare("UPDATE articulos SET id = ?, titulo = ?, extracto = ?, texto = ?, thumb = ? WHERE id = ?");

    $statement -> execute( [$id, $titulo, $extracto, $texto, $thumb, $id] );

    header('Location: ' . RUTA . 'admin');

} else { // Antes de enviar formulario (al carga la página)
    $id_article = id_article($_GET['id']); // Trae y limpia el contenido id del GET

    if (empty($id_article)) {
        header('Location: ' . RUTA . 'admin');
    }

    $post = getPost_ID($conexion, $id_article); // Obtenemos el Post por ID

    if (!$post) {
        header('Location: ' . RUTA . 'admin');
    }

    
}

require '../views/edit.view.php';
?>