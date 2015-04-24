
<?php 
	session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("conexion.php");
$email = $_POST['email'];
$password = $_POST['password'];
$error = "";
 $boton= "<li><a href='index.php'>Inicio</a></li>";
 $salir="";

if ($_POST) {
    

    $result = mysqli_query($conexion, "select * from usuarios where email = '$email'  && clave = '$password' ") or die("Error: " . mysqli_error($conexion));
    $rows = mysqli_fetch_array($result);


    if ($rows > 1) {
        if ($rows['perfil'] == 'cliente') {
            $_SESSION['login_user'] = $email;
            $boton= "<li><a href='home.php'>Inicio</a></li>";
            $salir="<li><a href='backend/salir.php'>Registrarse</a></li> ";
            header("location: home.php");
            
            
        }
        if ($rows['perfil'] == 'admin') {
            $_SESSION['login_user'] = $email;
            $boton= "<li><a href='admin.php'>Inicio</a></li>";
            $salir="<li><a href='backend/salir.php'>Registrarse</a></li> ";
            header("location: admin.php");
        }
    } else {
    	header("index.php");
        $error="Correo o clave incorrectos";
        echo $error;
        session_destroy();
    }

}
mysqli_close($conexion);
?>
