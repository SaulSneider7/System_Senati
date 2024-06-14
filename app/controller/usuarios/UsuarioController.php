<?php
    include_once '../../config.php';
    
    $action = isset($_POST['action']) ? $_POST['action'] : '';
    //CREAR, ACTUALIZAR Y ELIMINAR
    switch($action){
        case 'crearUsuario':
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $id_perfil = $_POST['id_perfil'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];

            if ($password == $password2) {
                $password = password_hash($password, PASSWORD_DEFAULT);
            } else {
                echo json_encode([
                    "success" => "error",
                    "message" => "Las contraseñas no coinciden"
                ]);
                exit;
            }

            $sql = "INSERT INTO usuarios (nombre, email, id_perfil, password) VALUES ('$nombre', '$email', '$id_perfil', '$password')";

            $query = mysqli_query($conn,  $sql);

            if ($query) {
                echo json_encode([
                    "success" => "success",
                    "message" => "Usuario creado exitosamente"
                ]);
            } else {
                echo json_encode([
                    "success" => "error",
                    "message" => "ERROR: Usuario no creado"
                ]);
            }
            
            
            break;
        case 'editarUsuario':
            # code...
            break;
        case 'eliminarUsuario':
            # code...
            break;
    }
?>