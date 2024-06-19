<?php
    include_once '../app/config.php';
    include_once '../layout/session.php';
    //Lista de usuarios
    $sql = "SELECT * FROM vista_usuarios";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $usuarios = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $usuarios = [];
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once '../layout/header.php' ?>
    <h1>Lista de Usuarios</h1>
    <a href="crear.php">crear</a>
    <table border='1'>
        <thead>
            <tr>
                <th>nombre</th>
                <th>email</th>
                <th>Perfil</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuarios as $usuario_dato) { ?>
            <tr>
                <td><?php echo $usuario_dato['nombre'] ?></td>
                <td><?php echo $usuario_dato['email'] ?></td>
                <td><?php echo $usuario_dato['cargo'] ?></td>
                <td>
                    <a href="ver.php?id=<?php echo $usuario_dato['id_usuario'] ?>">Ver</a>
                    <a href="edit.php?id=<?php echo $usuario_dato['id_usuario'] ?>">Editar</a>
                    <button type="button" onclick="eliminar_usuario('<?php echo $usuario_dato['id_usuario'] ?>')">Eliminar</button>
                    <a href="#" onclick="resetPassword('<?php echo $usuario_dato['id_usuario'] ?>')">Resetear</a>
                </td>
            </tr>
            <?php
                }   
            ?>
        </tbody>
    </table>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?php echo $ruta ?>public/js/usuario.js?v=<?php echo rand(1000,9999) ?>"></script>
</body>

</html>