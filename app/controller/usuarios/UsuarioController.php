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
            $id_usuario = $_POST['id_usuario'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $id_perfil = $_POST['id_perfil'];

            //Editar en BD
            $sql = "UPDATE usuarios SET nombre = '$nombre', id_perfil = '$id_perfil', email = '$email' WHERE id_usuario = $id_usuario";
            $query = mysqli_query($conn,  $sql);

            if ($query) {
                echo json_encode([
                    "success" => "success",
                    "message" => "Usuario Actualizado exitosamente"
                ]);
            } else {
                echo json_encode([
                    "success" => "error",
                    "message" => "ERROR: Usuario no actualizado"
                ]);
            }
            break;
        case 'eliminarUsuario':
            $id_usuario = $_POST['id_usuario'];
            //Codigo SQL
            $sql = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";
            $query = mysqli_query($conn,  $sql);

            if ($query) {
                echo json_encode([
                    "success" => "success",
                    "message" => "Usuario Eliminado exitosamente"
                ]);
            } else {
                echo json_encode([
                    "success" => "error",
                    "message" => "ERROR: Usuario no eliminado"
                ]);
            }
            break;
    }
?>