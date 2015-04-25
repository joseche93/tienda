<?php
include("conexion.php");
include("login.php");
	$producto_id=$_POST['producto_id'];
	$direccion=$_POST['direccion'];
	$comentario=$_POST['direccion'];

	$result=mysqli_query($conexion, "insert into pedidos (user_id, producto_id, direccion, comentario) values ( '".$_SESSION['login_user']."', '$producto_id', '$direccion', '$comentario') ");
$rows = mysqli_fetch_array($result);

mysqli_close($conexion);

	echo "<script>alert('Su pedido se ha realizado con exito, por favor recuerde cancelarlo pronto'); window.location = '../productos.php';</script>";
	header("location: ../home.php");

?>