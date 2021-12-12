<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Clientes</title>
</head>
<body>
    <?php
        include "recursos/navbar.php";
    ?>
    <div class="row" style="background: black;width:100%">
        <div class="col-md-6">
            <div class="w-100">
                <img style="width: 100%;height:93vh" src="https://images.pexels.com/photos/2988232/pexels-photo-2988232.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
            <h2 style="color: white;">Clientes</h2>
            <form style="background: rgba(255,255,255,0.5);padding:15px;border-radius:10px;height:50%" action="php/clientes.php" class="form-group d-flex flex-column align-items-center justify-content-center" method="POST">
                <div class="input-group mb-3">
                    <label for="emailCliente" class="input-group-text">Email:</label>
                    <input autocomplete="off" type="text" name="emailCliente" class="form-control">
                </div>
                <div class="input-group">
                    <label for="passCliente" class="input-group-text">Contraseña:</label>
                    <input type="password" name="passCliente" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary btn-lg w-100 mt-4" value="Ingresar">
                <span class="mt-2">Aun no tienes una cuenta?, <a href="registro_clientes.php">Registrate aquí</a></span>
            </form>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>