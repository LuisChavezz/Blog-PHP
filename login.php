<?php session_start();
require 'admin/config.php';
require './functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Sí se realizó la petición
    $user = cleanData($_POST['user']);
    $password = cleanData($_POST['password']);

    if ($user == $blog_admin['user'] && $password == $blog_admin['password']) {
        $_SESSION['admin'] = $blog_admin['user'];
        header('Location:' . RUTA . 'admin.php');
    }
}

require 'views/login.view.php';
?>