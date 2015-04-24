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
	<?php include("backend/pedidos.php") ?>
	<main>
		 <h2 align="center" class="titulo container">Pedidos</h2>
		 <section class="container">
		 	<p>ID del producto: <?php echo $producto_id ?></p>
		 	
		 </section>
	</main>
	<?php include("footer.php") ?>

		<!--Dependencias-->
     <script type="text/javascript" src="lib/jquery-2.1.3.js"></script>
     <script type="text/javascript" src="lib/materialize/js/materialize.js"></script>
     <script type="text/javascript" src="lib/handlebars-v3.0.1.js"></script>
</body>
</html>