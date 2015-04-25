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
		<header>
			<nav class="header">
			    <div class="nav-wrapper">
				    <span class="brand-logo header__logo">
				    	4Life
				    </span>
				    <ul id="nav-mobile" class="left hide-on-med-and-down right">
        				<li><a class="waves-effect waves-light" href="backend/salir.php">Salir</a></li>
				    </ul>
			    </div>
		    </nav>
		</header>
		<main class="container row">
			<section class="container">
						<h2 align="center" class="titulo">Administrador</h2>
			</section>
			<section class="row container col s9 offset-s3">
			<a href="backend/pedidosadmin.php"><div class="waves-effect waves-light col s5 offset-s1 icon-block icon__box ">
            	<h2 class="center white-text"><i class="mdi-editor-format-list-bulleted icon-size"></i></h2>
            	<h5 class="center white-text">Ver todos los pedidos</h5>	
          	</div></a>
		</section>

		</main>
		
	<?php include("footer.php") ?>
		<!--Dependencias-->
     <script type="text/javascript" src="lib/jquery-2.1.3.js"></script>
     <script type="text/javascript" src="lib/materialize/js/materialize.js"></script>
    
    

	</body>
</html>