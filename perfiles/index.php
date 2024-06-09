<?php
    include '../app/config.php';
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: '.$ruta.'login/index.php');
    } else {
        $nombre_session = $_SESSION['nombre'];
        $email_session = $_SESSION['email'];
    }
    include '../app/controller/perfiles/lista_perfiles.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Perfiles</h1>
    <table border='1'>
        <thead>
            <tr>
                <th>nombre</th>
                <th>Acciones`</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($perfiles as $perfil_dato) { ?>
                    <tr>
                        <td><?php echo $perfil_dato['nombre'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $perfil_dato['id_perfil'] ?>">Editar</a>
                        </td>
                    </tr>
                <?php
                }   

            ?>
        </tbody>
    </table>
</body>
</html>