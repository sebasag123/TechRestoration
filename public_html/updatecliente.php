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
    $idcliente_new = $_POST["idcliente_new"];
    $nombre = $_POST["Nombre_cliente"];
    $email = $_POST["corre_electronico"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $encargado = $_POST["usuario_idusuario"];
  
    $insertarDatos = "UPDATE cliente SET Nombre_cliente='$nombre', telefono='$telefono', corre_electronico='$email', direccion='$direccion', usuario_idusuario='$encargado' WHERE idcliente = '$idcliente_new'";
  
    $ejecutarInsertar = mysqli_query($conexion,$insertarDatos);
    
    if(!$ejecutarInsertar){
      echo"ERROR EN LINEA SQL";
    }
  
  }

  header('Location: registrocliente.php');

?>
