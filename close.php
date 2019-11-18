<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <title>Sesión Cerrada</title>
    </head>

    <body class="bg-dark text-white">
    <center>
        <br><br>
        <h3><strong>Sesión cerrada con éxito</strong></h3>
        <br>
        <br>
        <a href="index.php" class="alert-link">Iniciar otra sesión.</a>
    </center>
    </body>
</html>