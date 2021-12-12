<?php
    $codigo  = $_POST['codCli'];
    $nombre = $_POST['nombres'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $RUC = $_POST['ruc'];
    $dni = $_POST['dni'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $foto = "imgcli/".$codigo.".jpg"; 


    $sql = "INSERT INTO clientes VALUES ('$codigo','$nombre','$direccion','$telefono','$RUC','$dni','$password','$email','$foto')";
    
    include_once "../conexion/conexion.php";

    $res = mysqli_query($cn,$sql);

    $ruta = "../imgcli/";

    $archivo = $codigo.".jpg";

    move_uploaded_file($_FILES['foto']['tmp_name'],$ruta.$_FILES['foto']['name']);

    rename("../imgcli/".$_FILES['foto']['name'],"../imgcli/".$archivo);

    mysqli_close($cn);

    header('Location: ../login_usuarios.php');
?>