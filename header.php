<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>4life entregas a Mexico y Venezuela</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>
</head>
<body>
<?include ("backend/login.php") ?>
<header id="header">
	<nav class="header">
	    <div class="nav-wrapper">
		    <a href="#!" class="brand-logo header__logo">
		    	4Life
		    </a>
		    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
		    <ul class="right hide-on-med-and-down">
				<? echo $boton ?>
		        <li><a href="productos.php">Productos</a></li>
		        <li><a href="int.php">INT</a></li>
		        <li><a href="registro.php">Registrarse</a></li>
		      </ul>
		    <ul class="side-nav" id="mobile-demo">
		    	<? echo $boton ?>
		    	<li><a href="home.php">Inicio</a></li>
		       	<li><a href="productos.php">Productos</a></li>
		       	<li><a href="int.php">INT</a></li>
		       	<li><a href="registro.php">Registrarse</a></li> 
		    </ul>
	    </div>
    </nav>
</header>
</body>
</html>