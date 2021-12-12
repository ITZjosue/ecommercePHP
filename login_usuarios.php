<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <?php
        include "recursos/navbar.php";
    ?>
    <div style="background-color: black;" class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="position-relative">
            <h1 class="text-center w-100" style="color: white;position:absolute;">Intranet para Trabajadores</h1>
            <img style="width: 100%;height:92vh;" src="https://images.pexels.com/photos/264547/pexels-photo-264547.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="bg">
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center" style="width: 50%;height:50%;border-radius:15px;background:rgba(255,255,255,0.5);padding:30px;">
                <form class="form-group" action="php/login_usuarios.php" method="POST">
                    <div class="input-group">
                        <label class="input-group-prepend" for="id"><span class="input-group-text">ID:</span> </label>
                        <input autocomplete="off" style="width: 50px;" class="form-control" type="text" name="id" placeholder="Ingrese su ID">
                    </div>
                    <div class="input-group">
                        <label class="input-group-prepend" for="password"><span class="input-group-text">Password:</span> </label>
                        <input class="form-control" type="password" name="password" placeholder="password">
                    </div>
                    <input type="submit"  value="Ingresar" style="border-radius:10px;padding:10px;outline:none;border:none;width:100%;">
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>