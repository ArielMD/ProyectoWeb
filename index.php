<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="valida.js"></script>
        <title>Iniciar Sesión</title>
    </head>
    <body class="bg-dark text-white">
        <?php
        if (isset($_SESSION['user'])) {
            echo "Sesión activa como " . $_SESSION['user'];
            header('Location: home.php');
            ?>
        <br>
        <a href="close.php" class="alert-link">Cerrar sesión.</a>
        <?php
        } else {
            ?>
            <h1 class="d-flex justify-content-center align-items-center">Iniciar Sesión</h1><br>
            <div class="container">
                <img src  = "Login.png" class="mx-auto d-block img-fluid">
                <br>
                <div class="row">
                    <div class="d-flex justify-content-center align-items-center container">
                        <form name="login" action="validar.php" method="post" onsubmit="return valida();">
                            <div class="form-group">
                                <label for="uname" class="control-label">Usuario</label>
                                <input type="uname" name="uname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña:</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-secondary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
    </body>
</html>