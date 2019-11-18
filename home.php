<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenido - Conoce nuestros productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body class="bg-dark text-white">
        <nav class="navbar bg-dark navbar-dark">


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav list-group-horizontal-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 col-xl-3">
                                 <li class="nav-itemv">
                                    <a class="nav-link" href="#">Inicio</a>
                                </li>
                            </div>
                            <div class="col-sm-6 col-xl-6">
                                <li class="nav-item">
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Productos, categorías...">
                                        <button class="btn btn-secondary" type="submit">Buscar</button>
                                    </form>
                                </li>
                            </div>
                            <div class="col-sm-3 col-xl-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mi cuenta</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
        
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="https://amacarga.mx/wp-content/uploads/bfi_thumb/alimentos-bebidas-nm4g69ob12k6irsoe0yfdsv65kv5b6inptzrnmczag.jpg">
                    <p>Alimento y bebidas</p>
                </div>
                <div class="col">
                    <img class="img-fluid" src="https://laopinionla.files.wordpress.com/2018/09/shutterstock_217080976.jpg?quality=80&strip=all&w=940">
                    <p>Electrónicos</p>
                </div>
                <div class="col">
                    <img class="img-fluid" src="https://i0.wp.com/www.undertheroofblog.com/wp-content/uploads/2019/02/Preview4.png?fit=896%2C502&ssl=1">
                    <p>Hogar</p>
                </div>
                <div class="col">
                    <img class="img-fluid" src="https://previews.123rf.com/images/karandaev/karandaev1702/karandaev170200568/72969024-ropa-y-accesorios-para-hombres-jeans-zapatos-y-cintur%C3%B3n-sobre-fondo-de-madera-vista-superior-con-espaci.jpg">
                    <p>Ropa y accesorios</p>
                </div>
            </div>
        </div>
        
        <footer class="mt-2">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <a class="p-2" href="MetodosPago.html">Métodos de pago</a>
                    <a class="p-2" href="#">Ayuda</a>
                    <a class="p-2" href="#">Conócenos</a>
                </div>
            </div>
        </footer>
    </body>
</html>