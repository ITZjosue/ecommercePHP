<?php
    $id = $_POST['id'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    

    $sql = "UPDATE productos SET  Precio = '{$precio}', Descripcion = '{$descripcion}', Stock = '{$stock}' WHERE IdProducto = '{$id}'";

    include_once "../conexion/conexion.php";

    $res = mysqli_query($cn,$sql);

    if($_FILES['imagen']['tmp_name']){
        $imagen = '../imgprod/'.$id.'.jpg';

        unlink($imagen);


        $ruta = '../imgprod/';
        $archivo = $id.'.jpg';

        move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta.$_FILES['imagen']['name']);
        rename($ruta.$_FILES['imagen']['name'],$ruta.$archivo);
        mysqli_close($cn);

        header('Location: ../catalogo.php');
    }else{
        mysqli_close($cn);
    
        header('Location: ../catalogo.php');
    }

?>