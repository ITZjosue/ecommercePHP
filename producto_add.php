<?php
    session_start();
    if(!isset($_SESSION['tipo'])){
        header('Location: catalogo.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel='stylesheet' href='styles/producto_add.css'/>
    <title>Añadir Produto</title>
</head>
<body>
    <?php include "recursos/navbar.php"?>

    <div class="contenedor d-flex">
        <div class="imagen w-100"></div>
        <div class="formulario w-100">
            <h1 style="font-size: 3em;">Registrar Producto</h1>
            <form action="php/producto_add.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="idproducto" class="input-group-text">ID</label>
                    <input type="number" name="idproducto" class="form-control">
                </div>

                <div class="input-group">
                    <label for="desc" class="input-group-text">Descripcion</label>
                    <input type="text" name="desc" class="form-control">
                </div>

                <div class="input-group">
                    <label for="marca" class="input-group-text">Marca</label>
                    <select name="marca">
                        <?php
                            $sql = "SELECT * FROM marcas ORDER BY Codigo";
                            include_once "conexion/conexion.php";
                            $res = mysqli_query($cn,$sql);
                            while($arr = mysqli_fetch_assoc($res)){
                                echo "<option value='{$arr['NomMarca']}'>{$arr['NomMarca']}</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="input-group">
                    <label for="precio" class="input-group-text">Precio</label>
                    <input type="number" name="precio" class="form-control">
                </div>

                <div class="input-group">
                    <label for="stock" class="input-group-text">Stock</label>
                    <input type="number" name="stock" class="form-control">
                </div>

                <div class="input-group">
                    <label for="categoria" class="input-group-text">Categoria</label>
                    <select name="categoria">
                        <?php
                            $sql = "SELECT * FROM categorias ORDER BY IdCategoria";
                            $res = mysqli_query($cn,$sql);

                            while($arr = mysqli_fetch_assoc($res)){
                                echo "<option value='{$arr['IdCategoria']}'>{$arr['NomCategoria']}</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="input-group">
                    <label for="idproducto" class="input-group-text">Proveedor</label>
                    <select name="proveedor">
                        <?php
                            $sql = "SELECT * FROM proveedores ORDER BY IdProveedor";
                            $res = mysqli_query($cn,$sql);
                            while($arr = mysqli_fetch_assoc($res)){
                                echo "<option value='{$arr['IdProveedor']}'>{$arr['NomProveedor']}</option>";
                            }
                            mysqli_close($cn);
                        ?>
                    </select>
                </div>

                <div class="input-group">
                    <label for="foto" class="input-group-text">Imagen</label>
                    <input type="file" name="foto" class="form-control">
                </div>

                <input type="submit" class="btn btn-success w-100" value="Registrar">
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>