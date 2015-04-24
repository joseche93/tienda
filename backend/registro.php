<?php

include("conexion.php");

$email = $_POST['email'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono= $_POST['telefono'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];

$result=mysqli_query($conexion, "insert into usuarios (email, clave, nombre, apellido, telefono, pais, estado, ciudad, direccion) values ( '$email', '$clave', '$nombre', '$apellido', '$telefono', '$pais', '$estado', '$ciudad', '$direccion') ");
$rows = mysqli_fetch_array($result);

	if ($rows['email']==1) {
		echo "<script>alert('Este correo ya ha sido registrado'); window.location = '../index.php';</script>";	
		
	}

mysqli_close($conexion);

	echo "<script>alert('Se ha registrado exitosamente!'); window.location = '../frontend/pages/productos.php';</script>";
	header("location: ../frontend/pages/productos.php");
?>
