<?php
    session_start();
    include_once "../conexion/conexion.php";
    
    $sql = "SELECT max(IdPedido) FROM pedidos";
    $res = mysqli_query($cn,$sql);
    $arr = mysqli_fetch_array($res);
    $date = date('Y-m-d');
    if($arr[0] == NULL){
        $id = "00001";
    }else{
        $id = str_pad($arr[0]+1,5,'0',STR_PAD_LEFT);
    }

    $sql = "INSERT pedidos VALUES ('$id','$date','{$_SESSION['id']}')";
    mysqli_query($cn,$sql);

    $sql = "INSERT INTO detallepedidos (IdProducto,cantidad,Precio) SELECT IdProducto,Cantidad,Precio FROM carrito WHERE IdCliente = '{$_SESSION['id']}'";
    
    $sql = "UPDATE detallepedidos SET IdPedido = '$id' WHERE idpedido = ''";

    mysqli_query($cn,$sql);

    $sql = "DELETE FROM carrito WHERE idcliente = '{$_SESSION['id']}'";

    mysqli_query($cn,$sql);

    header('Location: ../catalogo.php');
?>