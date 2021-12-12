<?php

    session_start();
    if(!isset($_SESSION['tipo'])){
        header('Location: ../catalogo.php');
    }else{
        $idprod = $_GET['prod'];
    
        $sql = "DELETE FROM productos WHERE IdProducto = '{$idprod}'";
    
        include_once "../conexion/conexion.php";
    
        $res = mysqli_query($cn,$sql);
    
        mysqli_close($cn);
        header('Location: ../catalogo.php');
    }

?>