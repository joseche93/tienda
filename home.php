<? include("backend/sesion.php") ?>
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
	<main>
		<section class="container">
			<h2 align="center" class="titulo">Bienvenido a la Tienda</h2>
			<h5>Bienvenido <? echo $_SESSION['login_user']  ?></h5><br>
		</section>
		<section class="row container">
			<a href="backend/pedidoshome.php"><div class="waves-effect waves-light col s5 offset-s1 icon-block icon__box ">
            	<h2 class="center white-text"><i class="mdi-editor-format-list-bulleted icon-size"></i></h2>
            	<h5 class="center white-text">Ver mis pedidos</h5>	
          	</div></a>
          	<button data-target="modal1" class="modal-trigger waves-effect waves-light col s5 offset-s1 icon-block icon__box">
          		
            	<h2 class="center white-text"><i class="mdi-editor-attach-money icon-size"></i></h2>
            	<h5 class="center white-text">Ver Formas de Pago</h5>	
          	
          	</button>
  			<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Depositar o transferir en Venezuela a:</h4>
      <ul>
      	<li>Nombre: José Méndez</li>
      	<li>Número de Cuenta: 342353265435653474576574</li>
      	<li>Cédula: 21044909</li>
      	<li>Correo: josemanuelche93@gmail.com</li>
      	<strong>Enviar copia de transferencia o depósito a ese correo. El pedido no sera enviado hasta no ser pagado.</strong>
      	<p>Nota: por el momento no hay enviós a México</p>
      </ul>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Ok</a>
    </div>
  </div>
		</section>
	</main>

	<?php include("footer.php") ?>
	<!--Dependencias-->
	<script type="text/javascript" src="lib/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="lib/materialize/js/materialize.js"></script>

	<!--Mis scripts-->
	<script type="text/javascript" src="js/home.js"></script>

</body>
</html>