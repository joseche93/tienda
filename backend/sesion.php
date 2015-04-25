<?php
	

include('../backEnd/conexion.php');

session_start();

$verificar_usuario = $_SESSION['login_user'];
$result = mysqli_query($conexion, "select * from usuarios where email = " . $_SESSION['login_user']);
$row = mysqli_fetch_array($result);
$login_session = $row['email'];

if (!isset($login_session)) {
    mysqli_close($conexion);
    header('Location: index.php');
}
mysqli_close($conexion);

include('backend/conexion.php');

$usuario_id;
$nombre;

$result = mysqli_query($conexion, "select * from usuarios where email = '$login_session'");
while ($row = mysqli_fetch_array($result)) {
    $usuario_id = $row['usuario_id'];
    $nombre = $row['nombre'];
}
$inactivo = 900;
 
    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {
            session_destroy();
            header("Location: index.php");
        }
    }
 
    $_SESSION['tiempo'] = time();
mysqli_close($conexion);
 ?>
