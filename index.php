<?php
    include 'app/config.php';
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: '.$ruta.'login/index.php');
    } else {
        $nombre_session = $_SESSION['nombre'];
        $email_session = $_SESSION['email'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::System Senati::.</title>
</head>
<body>
    <a href="<?php echo $ruta; ?>app/controller/login/salir.php" style="float:right;">Cerrar Sesion</a>
    <ul>
        <li><a href="usuarios/index.php">Usuarios</a></li>
        <li><a href="perfiles/index.php">Perfiles</a></li>
    </ul>
    <h1>System Senati</h1>
    <h2>Bienvenido <?php echo $nombre_session; ?></h2>

</body>
</html>