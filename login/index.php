<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Iniciar Sesion</h1>
    <form method="post">
        <label for="">Email:</label>
        <input type="text" name="email" id="email">

        <label for="">Password:</label>
        <input type="password" name="password" id="password">

        <button type="button" id="ingresar">Iniciar Sesion</button>
    </form>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../public/js/login.js?v=<?php echo rand(1000,9999) ?>"></script>
</body>
</html>