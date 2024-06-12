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
    <?php include_once 'layout/header.php' ?>

    <h1>System Senati</h1>
    <h2>Bienvenido <?php echo $nombre_session; ?></h2>

</body>

</html>