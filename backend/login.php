
<?php 
include('conexion.php');
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);
$error = "";
 $email = $_POST['email'];
 $password = $_POST['password'];  
$_SESSION['login_user']=" ";
if ($_POST) {

    $result = mysqli_query($conexion,"select * from usuarios where email = '" . $email . "' and clave = '" . $password."'");
    $rows = mysqli_fetch_array($result);

    if ($rows>0) {
        if ($rows['perfil'] == 'cliente') {
            $_SESSION['login_user'] = $email;
           echo '<script>window.location = "../home.php" </script>';
        }
        if ($rows['perfil'] == 'admin') {
            $_SESSION['login_user'] = $email;
            echo '<script>window.location="../admin.php"</script>';
        }
    } else {
        echo '<script>alert("Correo o clave incorrecta"); window.location="../index.php"</script>';
    }
}
mysqli_close($conexion);

?>
