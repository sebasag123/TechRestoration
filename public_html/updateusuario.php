<?php

$server="localhost";
$user="root";
$password="password";
$bd ="ejemplo.db";

$conexion = new mysqli($server,$user,$password,$bd);

if($conexion->connect_errno){
    die("LA CONEXION HA FALLADO" . $conexion->connect_errno);
}

if(isset($_POST['enviar'])){
    $idusuario_new = $_POST["idusuario_new"];
    $nombre = $_POST["Nombre"];
    $email = $_POST["correo_electronico"];
    $telefono = $_POST["telefono"];
    $permisos = $_POST["tipo_usuario_idtipo_usuario"];
    $usuario = $_POST["username"];
    $contrasena = $_POST["pass"];
  
    $insertarDatos = "UPDATE usuario SET Nombre='$nombre', telefono='$telefono', correo_electronico='$email', username='$usuario', pass='$contrasena', tipo_usuario_idtipo_usuario='$permisos' WHERE idusuario = '$idusuario_new'";
  
    $ejecutarInsertar = mysqli_query($conexion,$insertarDatos);
    
    if(!$ejecutarInsertar){
      echo"ERROR EN LINEA SQL";
    }
  
  }

  header('Location: selectusuario.php');

?>
