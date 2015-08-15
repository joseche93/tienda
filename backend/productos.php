<?php 
include("conexion.php");
	$consulta=mysqli_query($conexion,"select * from productos");
	echo "<table class='bordered'>
	        <thead>
	          <tr>
	              <th>ID</th>
	              <th>&nbsp; &nbsp; &nbsp; Imagen</th>
	              <th>Nombre</th>
	              <th>Descripción</th>
	              <th>Precio</th>
	              <th>Categoría</th>
	              <th>Pedidos</th>
	          </tr>
	        </thead>";
	while($filas=mysqli_fetch_array($consulta)){
		echo utf8_encode("
		<form action='pedidos.php' method='GET'>
			<tr>
				<td name='id'>".$filas['producto_id']."</td>
				<td name='imagen'><img src=".$filas['imagen']." width='100px' height'100px' alt=''></td>
				<td name='nombre'>".$filas['nombre']."</td>
				<td name='descripcion'>".$filas['descripcion']."</td>
				<td name='precio'>".$filas['precio']."</td>
				<td name='categoria'>".$filas['categoria']."</td>
				<td><br><a href='pedidos.php?producto_id=".$filas['producto_id']." 'title'=".$filas['producto_id']." class='btn waves-effect waves-light btn-prod'>Comprar</a></td>
			</tr>
		</form>");
		
	}
	echo "</table>";
	$producto_id=$filas['producto_id'];
	$imagen=$filas['imagen'];
	$nombre=$filas['nombre'];
	$descripcion=$filas['descripcion'];
	$precio=$filas['precio'];
	$categoria=$filas['categoria'];	
	
 ?>