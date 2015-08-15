<?php
include('conexion.php');
session_start();

$verificar_usuario = $_SESSION['login_user'];
$result = mysqli_query($conexion, "select * from usuarios where email = '" . $_SESSION['login_user']."' ");
$row = mysqli_fetch_array($result);
$login_session = $row['email'];

if ($_SESSION['login_user']==" ") {
    mysqli_close($conexion);
    echo "<script>window.location = 'index.php';alert('Debe acceder a su cuenta para poder ver este contenido');</script>";
}
mysqli_close($conexion);

include('conexion.php');

$result = mysqli_query($conexion, "select * from usuarios where email = '$login_session'");
while ($row = mysqli_fetch_array($result)) {
    $user_id = $row['user_id'];
    $email = $row['email'];
}
/*
$inactivo = 900;
 
    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {
            session_destroy();
            header("Location: index.php");
        }
    }
 
    $_SESSION['tiempo'] = time(); */
mysqli_close($conexion);
 ?>
