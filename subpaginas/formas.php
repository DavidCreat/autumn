<?php
// Incluir el archivo de conexión a la base de datos
require_once '../recursos/php/db_freelance.php';

session_start();
if (isset($_SESSION['rol'])) {
    $rol = $_SESSION['rol'];

    if ($rol === '1') {
        include 'side-nav/sidebar-navbar1.php';
        include 'paginas/formas.php';
    } elseif ($rol === '2') {
        include 'side-nav/sidebar-navbar2.php';
        include 'erros/seguridad.php';
    } elseif ($rol === '3') {
        include 'side-nav/sidebar-navbar3.php';
        include 'erros/seguridad.php';
    }
} else {
    // Si no hay sesión iniciada o no se ha establecido un rol, redirecciona al formulario de inicio de sesión
    header("Location: ../login.php");
    exit();
}

?>