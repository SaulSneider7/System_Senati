<?php
    include '../../config.php';
    session_start();
    session_destroy();
    header('location: '.$ruta.'login/index.php');
?>