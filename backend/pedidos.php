<?php 
	include("conexion.php");
	
 if (isset($_GET['producto_id'])) {
		$producto_id=$_GET['producto_id'];
}
else{
	$producto_id="";
}

		$consulta=mysqli_query($conexion,"select * from productos where producto_id=".$producto_id." ");
		while($filas=mysqli_fetch_array($consulta)){
			$producto_id=$filas['producto_id'];
			$imagen=$filas['imagen'];
			$nombre=$filas['nombre'];
			$descripcion=$filas['descripcion'];
			$precio=$filas['precio'];
			$categoria=$filas['categoria'];		
	}

	$pedido= 
			"<form action='backend/pedidofinal.php' method='POST'>
				<input type='image' src=".$imagen." class='col s4 ped-img' width='300px' height='460px'>
				<div class='input-field col s8 '>
		          		<input id='idp' name='producto_id' type='number'  value=".$producto_id." readonly>
		          		<label for='idp'>ID del Producto: </label>
		        </div>	
		        <div class='input-field col s8 '>
		          		<input id='idp'  type='text'  value='".$nombre."' readonly>
		          		<label for='idp'>Nombre: </label>
		        </div>
		        <div class='input-field col s8 '>
		          		<input id='desc'  type='text'  value='".utf8_encode($descripcion)."' readonly>
		          		<label for='desc'>Descrición:</label>
		        </div>
		        <div class='input-field col s8 '>
		          		<input id='precio'  type='text' value=".$precio." class='input_tel' readonly>
		          		<label for='precio'>Precio: </label>
		        </div>
		        <div class='input-field col s8 '>
		          		<input id='categoria'  type='text'  value='".utf8_encode($categoria)."' readonly>
		          		<label for='categoria'>Categoría: </label>
		        </div>
		        <div class='input-field col s8 '>
		          		<input id='direccion' name='direccion' type='text'  class='validate' required>
		          		<label for='direccion'>Dirección de envió: </label>
		        </div>
		        <div class='input-field col s8 '>
		          		<input id='idp' name='comentario' type='text'  class='validate'>
		          		<label for='idp'>Comentarios o sugerencías (opcional) : </label>
		        </div>
		        <button class='btn waves-effect waves-light right' type='submit' name='action'>Pedir Producto
  				</button>
			 </form>
			";
 ?>