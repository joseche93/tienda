
<?php 
include('conexion.php');
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);
$error = "";
 $email = $_POST['email'];
 $password = $_POST['password'];  

if ($_POST) {

    $result = mysqli_query($conexion, "select * from usuarios where email = " . $email . " && clave = " . $password."");
    $rows = mysqli_fetch_array($result);

    if ($rows>0) {
        if ($rows['perfil'] == 'cliente') {
            $_SESSION['login_user'] = $email;
           echo '<script>window.location.replace(\"home.php"\)';
        }
        if ($rows['perfil'] == 'admin') {
            $_SESSION['login_user'] = $email;
            header("location: admin.php");
        }
    } else {
        $error = "Email o clave invalida";
    }
}
mysqli_close($conexion);

?>
