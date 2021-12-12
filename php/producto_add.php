<?php
    session_start();
    if(!isset($_SESSION['tipo'])){
        header('Location: ../catalogo:php');
    }else{
        $id = $_POST['idproducto'];
        $descripcion = $_POST['desc'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $proveedor = $_POST['proveedor'];
        $imagen = "imgprod/".$id.".jpg";
        // $foto = $_POST['foto'];
    
        $sql = "INSERT INTO productos VALUES ('$id','$descripcion','$marca','$precio','$stock','$categoria','$proveedor','$imagen')";
        include_once "../conexion/conexion.php";
        $res = mysqli_query($cn,$sql);
        $ruta = "../imgprod/";
        $imgname = $id.".jpg";
    
        move_uploaded_file($_FILES['foto']['tmp_name'],$ruta.$_FILES['foto']['name']);
        rename($ruta.$_FILES['foto']['name'],$ruta.$imgname);
    
        mysqli_close($cn);
    
        header('Location: ../catalogo.php');
    }
?>