<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: catalogo.php');
    }else{
        $cantidad = $_POST['txtCant'];
        $id_producto =$_GET['id'];
        $precio = $_GET['precio']*$cantidad;
        $id_cliente  = $_SESSION['id'];
    
        $sql = "INSERT INTO carrito VALUES ('$id_producto','$cantidad','$precio','$id_cliente')";
        include_once "conexion/conexion.php";
    
        $res = mysqli_query($cn,$sql);
    
        mysqli_close($cn);
    
        header("Location: carrito_lista.php");
    }
    
?>