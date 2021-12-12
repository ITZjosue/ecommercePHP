<?php
    session_start();
    $id = $_GET['obj'];
    $sql = "DELETE FROM carrito WHERE IdProducto = '{$id}' AND idcliente = '{$_SESSION['id']}'";

    include_once "../conexion/conexion.php";

    $res = mysqli_query($cn,$sql);

    header('Location: ../carrito_lista.php');
?>