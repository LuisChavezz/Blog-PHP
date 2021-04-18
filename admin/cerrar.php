<?php session_start();

session_destroy(); // Destrucción de la sesión
$_SESSION = []; // Vaciado de la sesión

header('Location: ../');
die(); // Finaliza la ejecución de la página

?>