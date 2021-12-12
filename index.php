<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="styles/catalogo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <?php
      include "recursos/navbar.php";
    ?>
    <?php
      if(isset($_SESSION['user'])){
        echo "<div style='z-index:10;' class='w-100 position-absolute alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Bienvenid(a) {$_SESSION['user']}</strong>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
      }
    ?>
    <div class="contenedor w-100">
      <img src="https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="banner">
      <h2>Los mejores productos tecnologicos acá</h2>
    </div>
    <section class="container-fluid mt-5">
    <div class='row'>
      <?php
        include_once "conexion/conexion.php";
        $sql = "SELECT * FROM productos ORDER BY IdProducto";
        $res = mysqli_query($cn,$sql);
        while($arr = mysqli_fetch_assoc($res)){
          echo "<div class='col-md-4 col-sm-6 text-center mb-3'>
            <div class='producto'>
              <a href='descripcion_producto.php?id={$arr['IdProducto']}'><img class='imagen' src='{$arr['Imagen']}' ></a>
              <span class='d-block'>{$arr['Descripcion']}<br/>$/{$arr['Precio']}<br/>Marca: {$arr['Marca']}</span>
              <a class='btn btn-primary mt-2' href='descripcion_producto.php?id={$arr['IdProducto']}'>Ver Info</a>
            </div>
          </div>";
        } 
      ?>
      </div>

      </div>
    </section>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>