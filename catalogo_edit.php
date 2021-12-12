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
    <title>Añadir producto</title>
</head>
<body>
    <?php include "recursos/navbar.php"?>

    <div class="container mt-5">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope='col'>Producto</th>
                    <th class="text-center" scope="col">Imagen</th>
                    <th class="text-center" scope='col'>Precio</th>
                    <th class="text-center" scope='col'>Descripcion</th>
                    <th class="text-center" scope='col'>Stock</th>
                    <th class="text-center" scope='col'>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    include_once "conexion/conexion.php";
                    $sql = "SELECT * FROM productos ORDER BY IdProducto";
                    $res = mysqli_query($cn,$sql);
                    while($arr = mysqli_fetch_assoc($res)){
                       echo "<tr>";
                       echo "<td class='text-center'>".$arr['IdProducto']."</td>";
                       echo "<td class='text-center'><img height='50px' src='{$arr['Imagen']}'/></td>";
                       echo "<td class='text-center'>".$arr['Precio']."</td>";
                       echo "<td class='text-center'>".$arr['Descripcion']."</td>";
                       echo "<td class='text-center'>".$arr['Stock']."</td>";
                       echo "<td class='text-center'><a href='producto_edit.php?prod={$arr['IdProducto']}' class='btn btn-warning'>Editar</a> <a href='php/eliminar_producto.php?prod={$arr['IdProducto']}' class='btn btn-danger'>Eliminar</a>";
                       echo "</tr>";     
                    }
                ?>
            </tbody>
        </table>
        <?php
            if(mysqli_num_rows($res)>0){
                echo "<a href='producto_add.php' class='btn btn-success'>Nuevo Producto</a>";
            }        
        ?>
            
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>