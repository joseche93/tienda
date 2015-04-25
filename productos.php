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
		<? include("header.php") ?>
		<? include("backend/sesion.php") ?>
		
		<main>
			<section class="container">
						<h2 align="center" class="titulo">Productos</h2>
			</section>
			<section class="row container">
				<? include ("backend/productos.php") ?>
			</section>
		</main>		
		<?php include("footer.php") ?>
		<!--Dependencias-->
     <script type="text/javascript" src="lib/jquery-2.1.3.js"></script>
     <script type="text/javascript" src="lib/materialize/js/materialize.js"></script>

	</body>
</html>