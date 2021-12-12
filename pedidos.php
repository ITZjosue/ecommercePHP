<?php
    session_start();
    if(!isset($_SESSION['id'])){
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

    <title>Pedidos</title>
</head>
<body>
    <?php
        include "recursos/navbar.php";
    ?>
    <h1 class="text-center">Pedidos</h1>
    <div class="container mt-5">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center" scope='col'>ID Pedido</th>
                    <th class="text-center" scope="col">Fecha</th>
                    <th class="text-center" scope='col'>Producto</th>
                    <th class="text-center" scope='col'>Imagen</th>
                    <th class="text-center" scope='col'>Precio</th>
                    <th class="text-center" scope='col'>Cantidad</th>
                    <th class="text-center" scope='col'>Importe total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once "conexion/conexion.php";
                    $sql = "SELECT d.idpedido,FechaPed,s.Descripcion,s.imagen,s.precio,cantidad,s.precio*cantidad FROM pedidos p INNER JOIN detallepedidos d ON d.idpedido = p.idpedido INNER JOIN productos s ON d.idproducto = s.idproducto WHERE IdCliente  = '{$_SESSION['id']}' ORDER BY FechaPed";
                    $res = mysqli_query($cn,$sql);
                    while($arr = mysqli_fetch_assoc($res)){
                       echo "<tr>";
                       echo "<td class='text-center'>".$arr['idpedido']."</td>";
                       echo "<td class='text-center'>".$arr['FechaPed']."</td>";
                       echo "<td class='text-center'>".$arr['Descripcion']."</td>";
                       echo "<td class='text-center'><img height='50px' src='{$arr['imagen']}'/></td>";
                       echo "<td class='text-center'>".$arr['precio']."</td>";
                       echo "<td class='text-center'>".$arr['cantidad']."</td>";
                       echo "<td class='text-center'>{$arr['s.precio*cantidad']}</td>";
                       echo "</tr>";     
                    }
                    mysqli_close($cn);
                ?>
            </tbody>
        </table>
            
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>