<?php

// $server = 'localhost:3307';
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'patologos';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
