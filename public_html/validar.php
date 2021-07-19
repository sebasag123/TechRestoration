<?php
$usuario=$_POST['username'];
$contrasena=$_POST['pass'];
session_start();
$_SESSION['username']=$usuario; 

$conexion=mysqli_connect("localhost","root","password","ejemplo.db");

$consulta="SELECT*FROM usuario where username='$usuario' and pass='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['tipo_usuario_idtipo_usuario']==1){ //administrador 
    header("location:admin.php");

}else
if($filas['tipo_usuario_idtipo_usuario']==2){ //tecnico
header("location:tecnico.php");
}
else
if($filas['tipo_usuario_idtipo_usuario']==3){ //recepcionista
header("location:recepcionista.php");}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);