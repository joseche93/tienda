<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4life entregas a Mexico y Venezuela</title>
	<!--Import materialize.css-->
      <link rel="stylesheet" href="../css/main.css">
      <link type="text/css" rel="stylesheet" href="../lib/materialize/css/materialize.css"  media="screen,projection"/>
     
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
        				<li><a class="waves-effect waves-light" href="../../backend/salir.php">Salir</a></li>
				    </ul>
			    </div>
		    </nav>
		</header>
		<main>
			<section class="row container">
				<button class="btn waves-effect waves-light col s3 btn-large btn-adm">Ver Pedidos</button>
				<button class="btn waves-effect waves-light col s4 offset-s1 btn-large btn-adm">Ver Pedidos Pendientes</button>
				<button class="btn waves-effect waves-light col s3 offset-s1 btn-large btn-adm">Ver Pagos</button>
			</section>
		</main>
		
	<?php include("../base/footer.php") ?>
		<!--Dependencias-->
     <script type="text/javascript" src="../lib/jquery-2.1.3.js"></script>
     <script type="text/javascript" src="../lib/materialize/js/materialize.js"></script>
     <script type="text/javascript" src="../lib/handlebars-v3.0.1.js"></script>
    
    

	</body>
</html>