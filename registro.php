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
		<header id="header">
			<nav class="header">
			    <div class="nav-wrapper">
				    <a href="#!" class="brand-logo header__logo">
				    	4Life
				    </a>
				    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				    <ul class="right hide-on-med-and-down">
						<li><a href="index.php">Inicio</a></li>
				        <li><a href="productos.php">Productos</a></li>
				        <li><a href="int.php">INT</a></li>
				        <li><a href="registro.php">Registrarse</a></li>
				      </ul>
				    <ul class="side-nav" id="mobile-demo">
				    	<li><a href="home.php">Inicio</a></li>
				       	<li><a href="productos.php">Productos</a></li>
				       	<li><a href="int.php">INT</a></li>
				       	<li><a href="registro.php">Registrarse</a></li> 
				    </ul>
			    </div>
		    </nav>
		</header>
		<main>
			<section class="container">
						<h2 align="center" class="titulo">Registro</h2>
			</section>
			<form action="backend/registro.php" method="POST" class="row whiteframe container">
				<div class="row ">
					<div class="input-field col s8 offset-s2">
		          		<input id="email" name="email" type="email"  class="validate" required>
		          		<label for="email">Correo</label>
		        	</div>	
		      	</div>
		      	<div class="row">
			      	<div class="input-field col s8 offset-s2">
			          	<input id="clave" name="clave" type="password"  class="validate" required>
		          		<label for="clave">Contraseña</label>
			        </div>
		        </div>
		        <div class="row">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="nombre" name="nombre" type="text" class="input_letra validate" required>
		          		<label for="nombre">Nombre</label>
		        	</div>
		        </div>
				<div class="row">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="apellido" name="apellido" type="text" class="validate input_letra" required>
		          		<label for="apellido">Apellido</label>
		        	</div>
		      	</div>
		      	<div class="row ">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="telefono" name="telefono" type="tel" class="input_tel validate" required>
		          		<label for="telefono">Teléfono</label>
		        	</div>
		      	</div>
		      	<div class="row">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="pais" name="pais" type="text" class="validate input_letra" required>
		          		<label for="pais">País</label>
		        	</div>
		      	</div>
		      	<div class="row ">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="estado" name="estado" type="text" class="validate input_letra" required>
		          		<label for="estado">Estado</label>
		        	</div>
		      	</div>
		      	<div class="row ">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="ciudad" name="ciudad" type="text"  class="validate input_letra" required>
		          		<label for="ciudad">Ciudad</label>
		        	</div>
		      	</div>
		      	<div class="row ">
		        	<div class="input-field col s8 offset-s2">
		          		<input id="direccion" name="direccion" type="text" class="validate input_letra" required>
		          		<label for="direccion">Dirección</label>
		        	</div>
		      	</div>
		      	
  				<div class="row">
	  				<div class="col s4 offset-s2">
	  					<button class="btn waves-effect waves-light btn-reg" type="submit" name="action" required>Borrar
	    				<i class="mdi-content-clear right"></i>
	  					</button>
	  				</div>
	  				<div class="col s4 offset-s2">
		  				<button class="btn waves-effect waves-light" type="submit" name="action" required>Aceptar
		    			<i class="mdi-action-done"></i>
		  				</button>
		  			</div>
  				</div>
			</form>
			<div class="bloque bloque-reg row"></div>
		</main>
		
		<?php include("footer.php") ?>
		<!--Dependencias-->
     <script type="text/javascript" src="lib/jquery-2.1.3.js"></script>
     <script type="text/javascript" src="lib/materialize/js/materialize.js"></script>
     <script type="text/javascript" src="js/validaciones.js"></script>
    <script type="text/javascript" src="js/validarletras.js"></script>

	</body>
</html>