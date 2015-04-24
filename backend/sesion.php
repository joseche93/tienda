<?php

include('conexion.php');

session_start();

$verificar_usuario = $_SESSION['login_user'];
$result = mysqli_query($conexion, "select * from usuarios where email = " . $_SESSION['login_user']);
$row = mysqli_fetch_array($result);
$login_session = $row['email'];

$usuario_id;
$nombre;
$apellido;
$result = mysqli_query($connection, "select * from usuarios where email = '$login_session'");
mysqli_close($connection);
?>
