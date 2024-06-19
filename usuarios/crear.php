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
    <h1>Crear Nuevo Usuario</h1>
    <form>
        <label for="">Nombre</label>
        <input type="text" placeholder="nombre" id="nombre_usuario"><br>
        <label for="">Email</label>
        <input type="text" placeholder="email" id="email_usuario"><br>
        <label for="">Perfil:</label>
        <select name="" id="id_perfil">
            <?php
                foreach($perfiles as $perfil_dato) { ?>
                <option value="<?php echo $perfil_dato['id_perfil'] ?>">
                    <?php echo $perfil_dato['nombre'] ?>
                </option>
                <?php
                }
            ?>
        </select><br>
        <label for="">Password</label>
        <input type="text" placeholder="password" id="password"><br>
        <label for="">Password 2</label>
        <input type="text" placeholder="password confirm" id="password2"><br>
        <button type="button" id="btn_crear_usuario">Crear</button>
    </form>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?php echo $ruta ?>public/js/usuario.js?v=<?php echo rand(1000,9999) ?>"></script>
</body>
</html>