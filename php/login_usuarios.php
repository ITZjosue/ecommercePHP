<?php
    $userid = $_POST['id'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usuarios WHERE IdUsuario = '$userid' AND Passwd = '$password'";

    include "../conexion/conexion.php";

    $res = mysqli_query($cn,$sql);
    if(mysqli_num_rows($res)>0){
        $arr = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['user'] = $arr['Nombres'];
        $_SESSION['id'] = $arr['IdUsuario'];
        $_SESSION['tipo'] = $arr['Tipo'];
        header('Location: ../catalogo.php');
    }else{
        header('Location: ../login_usuarios.php');
    }
?>