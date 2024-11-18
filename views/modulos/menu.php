<?php
require_once("../config/conexion.php");

// Iniciar la sesión
session_start();


?>

<nav class="mt-2">
    <!-- Bloque para mostrar información del usuario -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <!-- Mostrar el nombre del usuario logueado -->
            <input type="hidden" id="usu_idx" value="<?php echo $_SESSION['usu_id']; ?>">
            <a href="#" class="d-block"><?php echo $_SESSION['nombre']; ?></a>
        </div>
    </div>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Ejemplos de secciones en el menú -->
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
            <a href="../usuarios.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Usuarios</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="../menu.php" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>Menu</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="../social.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Social Media</p>
            </a>
        </li>

        <!-- Sección de Logout -->
        <li class="nav-header">SALIR</li>
        <li class="nav-item">
            <a href="./logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
</nav>
