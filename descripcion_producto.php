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
    <link rel="stylesheet" href="styles/descripcion_producto.css">
    <title>Document</title>
</head>
<body>
    
    <?php
      include "recursos/navbar.php";
    ?>
    <?php
      if(!isset($_SESSION['user'])){
        echo "<div class='position-relative alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Tienes que iniciar sesión para poder añadir al carrito</strong>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
      }
    ?>
<div class='d-flex justify-content-center align-items-center mt-5'>
    <div class="row w-75">
        <div class="col-md-6 text-center p-3">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM productos WHERE IdProducto = '{$id}'";
            include_once "conexion/conexion.php";
            $res = mysqli_query($cn,$sql);
            $arr = mysqli_fetch_assoc($res);
            echo "<img class='mb-3' src='{$arr['Imagen']}' alt='producto'>
                  <p>{$arr['Descripcion']}</p>
                  <p>Marca: {$arr['Marca']}</p>
                  <p>Stock: {$arr['Stock']}</p>
                  <p>Precio: $/{$arr['Precio']}</p>";
            mysqli_close($cn);
            ?>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <div>
            <form name="frmCar" action="carrito_add.php?id=<?php echo $id?>&precio=<?php echo $arr['Precio']?>" method="POST">
              <label for="cantidad">Cantidad:</label><br>
              <input name="mas" type="button" value="+">
              <input name="txtCant" type="number" style="width: 50px;" readonly value='1'>
              <input name="menos" type="button" value="-"><br><br>
              <?php
                if(!isset($_SESSION['user'])){
                  echo "<input type='submit' disabled class='btn btn-primary' value='Añadir al carrito'/>";
                }else{
                  echo "<input type='submit' class='btn btn-primary' value='Añadir al carrito'/>";
                }
              ?>
            </form>
          </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="javascript/carrito.js"></script>
</body>
</html>