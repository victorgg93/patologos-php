<?php


// DATOS DE CONEXIÓN
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'patologos';


// CREAMOS CONEXIÓN 
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
