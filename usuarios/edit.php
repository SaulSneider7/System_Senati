<?php
    include_once '../app/config.php';
    include_once '../layout/session.php';
    include_once '../app/controller/perfiles/lista_perfiles.php';

    //Recuperamos datos por el metodo GET
    $id_usuario = $_GET['id'];
    //Consulta a la base de datos
    $sql ="SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
    $query = mysqli_query($conn,  $sql);
    $result = mysqli_fetch_array($query);
    
    //Recuperar info desde la BD
    $nombre_bd = $result['nombre'];
    $email_bd = $result['email'];
    $perfil_usuario_bd = $result['id_perfil'];
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
    <h1>Editar datos del Usuario: <?php echo $nombre_bd; ?></h1>
    <form>
        <input type="hidden" value="<?php echo $id_usuario; ?>" id= "id_usuario">
        <label for="">Nombre</label>
        <input type="text" value="<?php echo $nombre_bd; ?>" id="nombre_usuario">
        <br><br>
        <label for="">Email</label>
        <input type="text"value="<?php echo $email_bd; ?>" id="email_usuario">
        <br><br>
        <label for="">Perfil:</label>
        <select name="" id="id_perfil">
            <?php
                foreach($perfiles as $perfil_dato){
                    echo '<option value="'.$perfil_dato['id_perfil'].'"';
                    if ($perfil_dato['id_perfil'] == $perfil_usuario_bd) {
                        echo ' selected';
                    }
                    echo '>'.$perfil_dato['nombre'].'</option>';
                }
                
            ?>
        </select>
        <br><br>
        <a href="index.php">Regresar</a>
        <button type="button" id="btn_editar_usuario">Editar</button>
    </form>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?php echo $ruta ?>public/js/usuario.js?v=<?php echo rand(1000,9999) ?>"></script>
</body>
</html>