<?php
    session_start();
    $sql = "SELECT * FROM productos WHERE IdProducto='{$_GET['prod']}'";
    include_once "conexion/conexion.php";
    $res = mysqli_query($cn,$sql);
    $arr = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel='stylesheet' href="styles/producto_edit.css"/>
    <title>Editar producto</title>
</head>
<body>
    <?php include "recursos/navbar.php"?>
    <div class="contenedor">
        <img src="https://images.pexels.com/photos/374870/pexels-photo-374870.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        <div class="formulario">
            <form action="php/productos_edit.php" enctype="multipart/form-data" method="POST">
                <div class="input-group">
                    <label for="id" class="input-group-text">ID</label>
                    <input type="number" name="id" readonly class="form-control" value="<?php echo $arr['IdProducto']?>">
                </div>

                <div class="input-group">
                    <label for="precio" class="input-group-text">Precio</label>
                    <input type="number" name="precio" class="form-control" value="<?php echo $arr['Precio']?>">
                </div>
                
                <div class="input-group">
                    <label for="descripcion" class="input-group-text">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" value="<?php echo $arr['Descripcion']?>">
                </div>
                
                <div class="input-group">
                    <label for="stock" class="input-group-text">Stock</label>
                    <input type="number" name="stock" class="form-control" value="<?php echo $arr['Stock']?>">
                </div>

                <div class="input-group">
                    <label for="imagen" class="input-group-text">Imagen</label>
                    <input type="file" name="imagen" class="form-control">
                </div>

                <img src='<?php echo $arr['Imagen']?>'>
                <input type="submit" class="btn btn-success mt-3"/>
            </form>
        </div>
    </div>

    <?php
        mysqli_close($cn);
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>