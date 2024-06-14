<?php
    session_start();
    include '../../config.php';

    // Recuperacion los datos por metodo POST con AJAX
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios where email = '$email'";
    $result = mysqli_query($conn,$sql);

    //Verificar si el usuario existe
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_array($result);
        //Recuperar info desde la BD
        $password_bd = $row['password'];
        $nombre_bd = $row['nombre'];
        $id_bd = $row['id_usuario'];
        
        if (password_verify($password,$password_bd)) {
            $_SESSION['id'] = $id_bd;
            $_SESSION['nombre'] = $nombre_bd;
            $_SESSION['email'] = $email;
            echo json_encode([
                "status" => 'success',
                "message" => 'Login exitoso',
                "url" => $ruta,
            ]);
        } else {
            echo json_encode([
                "status" => 'error',
                "message" => 'Password incorrecto',
            ]);
        }
    }else {
        echo json_encode([
            "status" => 'error',
            "message" => 'El usuario no existe',
        ]);
    }

?>