<?php
include("conexion.php");
session_start();
	$producto_id=$_POST['producto_id'];
	$direccion=$_POST['direccion'];
	$comentario=$_POST['comentario'];

	$cons=mysqli_query($conexion, "select user_id from usuarios where email='".$_SESSION['login_user']."'");
	while($fila=mysqli_fetch_array($cons)){
		$user_id=$fila['user_id'];
	}
	
	$result=mysqli_query($conexion, "insert into pedidos (user_id, producto_id, direccion, comentario) values ( ".$user_id.", '$producto_id', '$direccion', '$comentario') ");
	

mysqli_close($conexion);

	echo "<script>alert('Su pedido se ha realizado con exito, por favor recuerde cancelarlo pronto'); window.location = '../home.php';</script>";

?>