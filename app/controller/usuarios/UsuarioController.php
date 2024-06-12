<?php
    include_once '../../config.php';
    
    $action = isset($_POST['action']) ? $_POST['action'] : '';
    //CREAR, ACTUALIZAR Y ELIMINAR
    switch($action){
        case 'crearUsuario':
            echo json_encode([
                'mensaje' => 'Estas en el case crearUsuario',
            ]);
            break;
        case 'editarUsuario':
            # code...
            break;
        case 'eliminarUsuario':
            # code...
            break;
    }
?>