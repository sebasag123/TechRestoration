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
    $idficha_new = $_POST["idficha_new"];
    $estado = $_POST["estado"];
    $fecha_entrada = $_POST["fecha_entrada"];
    $tipo_producto = $_POST["tipo_producto"];
    $marca_producto = $_POST["marca_producto"];
    $modelo_producto = $_POST["modelo_producto"];
    $cod_serie_producto = $_POST["cod_serie_producto"];
    $comentarios = $_POST["comentarios"];
    $comentario_tecnico = $_POST["comentario_tecnico"];
  
    $insertarDatos = "UPDATE ficha_tecnica SET tipo_producto='$tipo_producto', cod_serie_producto='$cod_serie_producto', marca_producto='$marca_producto', comentarios='$comentarios', modelo_producto='$modelo_producto' , estado='$estado', comentario_tecnico='$comentario_tecnico' WHERE idficha_tecnica = '$idficha_new'";
  
    $ejecutarInsertar = mysqli_query($conexion,$insertarDatos);
    
    if(!$ejecutarInsertar){
      echo"ERROR EN LINEA SQL";
    }
  
  }
  
  header('Location: equiposregistrados.php');

?>
