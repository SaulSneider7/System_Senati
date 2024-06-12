<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: '.$ruta.'login/index.php');
    } else {
        $nombre_session = $_SESSION['nombre'];
        $email_session = $_SESSION['email'];
    }
?>