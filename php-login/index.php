<?php
// Validación de Errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargue de Sesión 
session_start();

$user_id = $_SESSION['user_id'];

echo "Bienvenido. Este es el contenido de la página";

// echo('<pre>');
// var_dump($user_id);
// echo('</pre>');

echo "<hr>";

echo "El id del usuario es: " . $user_id;

?>