<?php
    include_once '../app/config.php';
    include_once '../layout/session.php';
    include_once '../app/controller/perfiles/lista_perfiles.php';
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