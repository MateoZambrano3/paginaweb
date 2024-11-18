<?php
require_once("../config/conexion.php");

// Destruir la sesión activa
session_destroy();

// Redirigir al inicio o login
header("Location: " . Conectar::ruta() . "../index.php");
exit();
?>
