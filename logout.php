<?php
  // Reseteo de Sesión
  session_start();

  session_unset();

  session_destroy();
  
  // Redirección al Login
  header('Location: /php-login-patologos/php-login');
?>
