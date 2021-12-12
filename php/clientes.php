<?php
    $correo= $_POST['emailCliente'];
    $password = $_POST['passCliente'];

    $sql = "SELECT * FROM clientes WHERE Email = '{$correo}' AND PwdCli = '{$password}'";

    include_once "../conexion/conexion.php";

    $res = mysqli_query($cn,$sql);

    if(mysqli_num_rows($res)>0){
        session_start();
        $arr = mysqli_fetch_assoc($res);
        $_SESSION['user'] = $arr['Nombres'];
        $_SESSION['id'] = $arr['IdCliente'];
        header('Location: ../catalogo.php');
    }else{
        header('Location: ../clientes.php');
    }
    mysqli_close($cn);
?>