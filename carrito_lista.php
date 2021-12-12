<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Carrito</title>
</head>
<body>
    <?php
        include "recursos/navbar.php";
    ?>
    <div class="container mt-5">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope='col'>Producto</th>
                    <th class="text-center" scope="col">Imagen</th>
                    <th class="text-center" scope='col'>Precio</th>
                    <th class="text-center" scope='col'>Importe</th>
                    <th class="text-center" scope='col'>Cantidad</th>
                    <th class="text-center" scope='col'>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once "conexion/conexion.php";
                    $sql = "SELECT c.IdProducto,Imagen,Descripcion,Cantidad,c.Precio,c.idcliente,Nombres,c.Precio*Cantidad FROM carrito c INNER JOIN productos p ON c.IdProducto = p.IdProducto INNER JOIN clientes s ON s.IdCliente = c.idcliente WHERE c.IdCliente = '{$_SESSION['id']}'";
                    $res = mysqli_query($cn,$sql);
                    while($arr = mysqli_fetch_assoc($res)){
                       echo "<tr>";
                       echo "<td class='text-center'>".$arr['Descripcion']."</td>";
                       echo "<td class='text-center'><img height='50px' src='{$arr['Imagen']}'/></td>";
                       echo "<td class='text-center'>".$arr['Precio']."</td>";
                       echo "<td class='text-center'>{$arr['c.Precio*Cantidad']}</td>";
                       echo "<td class='text-center'>".$arr['Cantidad']."</td>";
                       echo "<td class='text-center'><a href='php/eliminar_carrito.php?obj={$arr['IdProducto']}' class='btn btn-danger'>Eliminar</a>";
                       echo "</tr>";     
                    }
                ?>
            </tbody>
        </table>
        <?php
            if(mysqli_num_rows($res)>0){
                echo "<a href='php/confirmar_compra.php' class='btn btn-success'>Confirmar compra</a>";
            }        
        ?>
            
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>