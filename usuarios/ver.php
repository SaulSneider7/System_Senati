<?php
    include_once '../app/config.php';
    include_once '../layout/session.php';
    //Recuperamos datos por el metodo GET
    $id_usuario = $_GET['id'];

    //Consulta a la base de datos
    $sql ="SELECT * FROM vista_usuarios WHERE id_usuario = $id_usuario";
    $query = mysqli_query($conn,  $sql);
    
    $result = mysqli_fetch_array($query);
    
    //Recuperar info desde la BD
    $nombre_bd = $result['nombre'];
    $email_bd = $result['email'];
    $cargo_bd = $result['cargo'];
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
    <h1>Ver Datos del usuario: <?php echo $nombre_bd; ?> </h1>
    
    <label for="">Nombre</label>
    <input type="text" value="<?php echo $nombre_bd; ?>" disabled>
    <br><br>

    <label for="">Email</label>
    <input type="text" value="<?php echo $email_bd; ?>" disabled>
    <br><br>

    <label for="">Cargo</label>
    <input type="text" value= "<?php echo $cargo_bd; ?>" disabled>
    <br><br>

    <a href="index.php">Regresar</a>
    
</body>
</html>