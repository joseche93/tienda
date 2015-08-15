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

$result=mysqli_query($conexion, "insert into usuarios (email, clave, nombre, apellido, telefono, pais, estado, ciudad, direccion) values ( '$email', '".md5($clave)."', '$nombre', '$apellido', '$telefono', '$pais', '$estado', '$ciudad', '$direccion') ");


$resultado = mysqli_query($conexion,"select * from usuarios where email = '" . $email . "'");
    $filas = mysqli_fetch_array($resultado);

error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if ($filas['email']>0) {
		echo "<script>alert('Este correo ya ha sido registrado'); window.location = '../registro.php';</script>";	
		
	}
	else{
	echo "<script>alert('Se ha registrado exitosamente!'); window.location = '../index.php';</script>";
	}
	mysqli_close($conexion);
?>
