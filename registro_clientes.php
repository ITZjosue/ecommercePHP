<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Registro</title>
</head>
<body style="background: black;">
    <?php include "recursos/navbar.php"?>
    <h1 class="text-light text-center">Registro de clientes</h1>
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 5%;">
        <form class="form-group" action="php/registro_clientes.php" enctype="multipart/form-data" method="POST">
            <div class="input-group mb-2">
                <label class="input-group-text" for="">Codigo:</label>
                <input autocomplete="off" name="codCli" type="number" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="input-group-text" for="">Nombres:</label>
                <input autocomplete="off" name="nombres" type="text" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="input-group-text" for="">Direccion:</label>
                <input autocomplete="off" name="direccion" type="text" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="input-group-text" for="">Telefono:</label>
                <input autocomplete="off" name="telefono" type="number" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="input-group-text" for="">RUC:</label>
                <input autocomplete="off" name="ruc" type="number" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="input-group-text" for="">DNI:</label>
                <input autocomplete="off" name="dni" type="number" class="form-control">
            </div>

            <div class="input-group mb-2">
                <label class="input-group-text" for="">Contraseña:</label>
                <input name="password" type="password" class="form-control">
            </div>
            <div class="input-group mb-2">
                <label class="input-group-text" for="">Email:</label>
                <input autocomplete="off" name="email" type="email" class="form-control">
            </div>
            <div class="input-group mb-2">
                <label for="" class="input-group-text">Foto</label>
                <input class="btn btn-lg btn-light" name="foto" type="file">
            </div>
            <input type="submit" class="btn btn-primary btn-lg w-100">
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>