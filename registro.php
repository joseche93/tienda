<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4life entregas a Mexico y Venezuela</title>
	<!--Import materialize.css-->
      <link rel="stylesheet" href="assets/css/main.css">
      <link type="text/css" rel="stylesheet" href="lib/materialize/css/materialize.css"  media="screen,projection"/>
     
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
</head>
	<body>
		<?php include("header.php") ?>
		<main>
			<section class="container">
						<h2 align="center" class="titulo">Registro</h2>
			</section>
			<form action="backend/registro.php" method="POST" class="row whiteframe container">
				<div class="row ">
					<div class="input-field col s8 offset-s2">
		          		<input id="email" name="email" type="email"  class="validate">
		          		<label for="email">Correo</label>
		        	</div>	
		      	</div>
		      	<div class="row">
			      	<div class="input-field col s8 offset-s2">
			          	<input id="clave" name="clave" type="password"  class="validate">
		          		<label for="clave">Contraseña</label>
			        </div>
		        </div>
		        <div class="row">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="nombre" name="nombre" type="text" class="validate">
		          		<label for="nombre">Nombre</label>
		        	</div>
		        </div>
				<div class="row">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="apellido" name="apellido" type="text" class="validate">
		          		<label for="apellido">Apellido</label>
		        	</div>
		      	</div>
		      	<div class="row ">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="telefono" name="telefono" type="tel" class="validate">
		          		<label for="telefono">Teléfono</label>
		        	</div>
		      	</div>
		      	<div class="row">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="pais" name="pais" type="text" class="validate">
		          		<label for="pais">País</label>
		        	</div>
		      	</div>
		      	<div class="row ">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="estado" name="estado" type="text" class="validate">
		          		<label for="estado">Estado</label>
		        	</div>
		      	</div>
		      	<div class="row ">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="ciudad" name="ciudad" type="text"  class="validate">
		          		<label for="ciudad">Ciudad</label>
		        	</div>
		      	</div>
		      	<div class="row ">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="direccion" name="direccion" type="tel" class="validate">
		          		<label for="direccion">Dirección</label>
		        	</div>
		      	</div>
		      	
  				<div class="row">
	  				<div class="col s4 offset-s2">
	  					<button class="btn waves-effect waves-light btn-reg" type="submit" name="action">Borrar
	    				<i class="mdi-content-clear right"></i>
	  					</button>
	  				</div>
	  				<div class="col s4 offset-s2">
		  				<button class="btn waves-effect waves-light" type="submit" name="action">Aceptar
		    			<i class="mdi-action-done"></i>
		  				</button>
		  			</div>
  				</div>
			</form>
			<div class="bloque bloque-reg row"></div>
		</main>
		
		<?php include("../base/footer.php") ?>
		<!--Dependencias-->
     <script type="text/javascript" src="lib/jquery-2.1.3.js"></script>
     <script type="text/javascript" src="lib/materialize/js/materialize.js"></script>
     <script type="text/javascript" src="lib/handlebars-v3.0.1.js"></script>
    

	</body>
</html>