<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<link rel="stylesheet" href="assets/css/main.css">
	<link type="text/css" rel="stylesheet" href="lib/materialize/css/materialize.css"  media="screen,projection"/>
<body>
	<?php include("header.php") ?>
	<? include("backend/sesion.php") ?>
	<?php include("backend/pedidos.php") ?>
	<main>
		<h2 align="center" class="titulo container">Pedidos</h2><br><br>
		<section class="container row whiteframe">
			<?php echo $pedido ?>

			
		 	
		 	
		 </section>
	</main>
	<?php include("footer.php") ?>

		<!--Dependencias-->
     <script type="text/javascript" src="lib/jquery-2.1.3.js"></script>
     <script type="text/javascript" src="lib/materialize/js/materialize.js"></script>
</body>
</html>