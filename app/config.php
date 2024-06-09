<?php
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $password = '';
    $database = 'system_senati';

    $conn = mysqli_connect($servidor, $usuario, $password, $database);

    if ($conn) {
        //echo "conectado a la base de datos";
    } else {
        echo "Error: " . mysqli_connect_error();
    }

    $ruta = 'http://127.0.0.1/Sys_Senati/';
    
?>
