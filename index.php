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
		<? include("header.php"); ?>
		<? include("backend/login.php"); ?>
		<main>
			<section class="container">
				<h2 align="center" class="titulo">Bienvenido a mi Tienda de Productos 4Life</h2>
			</section>
			<section class="row">		
				<div id="slider" class="slider col s7">
				    <ul class="slides">
				      <li>
				        	<img src="assets/img/productos4life.jpg"> 
				        	<div class="caption caption-color center-align">
				          		<h3>Conoce nuestros productos</h3>
				          		<h5 class="black-text">Potencia tu sistema inmune</h5>
				        	</div>
				      </li>
				      <li>
				        	<img src="assets/img/lineaverde.jpg"> 
				        	<div class="caption caption-color left-align">
				          		<h3>La línea Verde</h3>
				          		<h5 class="light grey-text text-lighten-3">Respalda tu sistema digestivo</h5>
				        	</div>
				      </li>
				      <li>
				        	<img src="assets/img/linearoja.png"> 
				        	<div class="caption caption-color right-align">
				          		<h3>La línea roja</h3>
				          		<h5 class="light grey-text text-lighten-3">Controla tu peso y llenate de energía</h5>
				        	</div>
				      </li>
				    </ul>	
				</div>
				<section class="col s4 offset-s1 container">
				    <form class="row whiteframe whiteframe-log" action="home.php" method="post">
				      	<div class="row">
				      		<?php echo $error; ?>
				        	<div class="input-field col s12">
				          		<i class="mdi-action-account-circle prefix"></i>
				          		<input id="email" name="email" type="email" class="validate">
				          		<label for="email">Correo</label>
				        	</div>
				      	</div>
				      	<div class="row">
				        	<div class="input-field col s12">
				          		<i class="mdi-action-lock prefix"></i>
				          		<input id="password" name="password" type="password" class="validate">
				          		<label for="password">Contraseña</label>
				        	</div>
				      	</div>
				      	<div class="row">
				      		<button  class="btn waves-effect waves-light btn col s10 offset-s1" type="submit">Iniciar Sesión</button>
				      	</div>
				      	<div class="row">
							<h6 class="col s6">Aún no eres un usuario?</h6>
							<a id="registro" class="waves-effect waves-light btn_bl col s6" href="registro.php">REGISTRATE AHORA</a>
						</div>	
				    </form>
				    	<div class="row">
			          		<div class="card grey darken-3 card-position">
			            		<div class="card-image">
			              			<img src="assets/img/eps21.jpg">
			              			<span class="card-title">Somos la INT</span>
			            			</div>
			            		<div class="card-action">
					              <a href=" int.php">Que es la INT?</a>
			            		</div>
			          		</div>	
			      		</div>
			    </section>    	
			</section>
		    <div class="section bloque blue-text text-lighten-5">
		      	<div class="row">
			        	<div class="col s12 m4">
			          		<div class="icon-block">
			            		<h2 class="center blue-text text-lighten-3"><i class="mdi-hardware-security"></i></h2>
			            		<h5 class="center">Respaldo al Sistema Inmune</h5>
			            		<p align="justify" class="light">Los productos de 4LIFE se enfocan en respaldar la salud inmunitaria. 
					            	Nuestra línea de productos patentados Transfer Factor respandar el sistema inmunitario
									para que sea capaz de responde al instante y contribuir con cada actividad de tu vida
									para que se desarrolle de la manera mas óptima.
			            		</p>
			          		</div>
			        	</div>
			        <div class="col s12 m4">
			          	<div class="icon-block">
			            	<h2 class="center blue-text text-lighten-3"><i class="mdi-maps-restaurant-menu"></i></h2>
			            	<h5 class="center">Respaldo al Sistema Digestivo</h5>
			            	<p align="justify" class="light">Contamos con prooductos especializados en el apoyo al sistema digestivo.
								Vitaminas, antioxidantes, minerales, y distintos suplementos enfocados en solucionar diferentes
								problemas gastrointestinales y que pueden ser causa de varios malestares.
			            	</p>
			          </div>
			        </div>
					<div class="col s12 m4">
			          	<div class="icon-block">
			            	<h2 class="center blue-text text-lighten-3"><i class="mdi-maps-directions-bike"></i></h2>
			            	<h5 class="center">Control de Peso y Energía</h5>	
			            	<p align="justify" class="light">Tenemos productos dedicados a mejorar la condición física, el peso y la
			            		salud de las personas. Además de suplementos para regular el apetito, así como energizantes para 
			            		mantenerse activos a la hora de ejercitarse, o en el duro ajetreo de la vida diaría.   
			            	</p>
			          	</div>
			        </div>
		    	</div>
		  	</div>
		</main>
		<?php include("footer.php"); ?>

		<!--Dependencias-->
     <script type="text/javascript" src="lib/jquery-2.1.3.js"></script>
     <script type="text/javascript" src="lib/materialize/js/materialize.js"></script>
     <script type="text/javascript" src="lib/handlebars-v3.0.1.js"></script>
    
     <!--Mis scripts-->
    <script type="text/javascript" src="js/login.js"></script>

	</body>
</html>