<?php

$server="localhost";
$user="root";
$password="";
$bd ="ejemplo.db";

$conexion = new mysqli($server,$user,$password,$bd);

if($conexion->connect_errno){
    die("LA CONEXION HA FALLADO" . $conexion->connect_errno);
} else { echo "conectado"; }
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/csstech.css" rel="stylesheet" type="text/css">
    
    <title>TechRestoration</title>
    <img class="logo" id="logo" src="img/logo42.png">
  </head>
  <body>
  <center><h2>Registro Clientes</h2></center>

<form class="row g-3 needs-validation" method="POST" action="gestionarcliente.php">

    <div class="container-md">
  
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefono</th>
      <th scope="col">RUT</th>
      <th scope="col">Registrado por</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql = "SELECT * FROM cliente";
$result = mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){

?>
    <tr>
      <th scope="row"><?php echo $mostrar['idcliente'] ?></th>
      <td><?php echo $mostrar['Nombre_cliente'] ?></td>
      <td><?php echo $mostrar['corre_electronico'] ?></td>
      <td><?php echo $mostrar['telefono'] ?></td>
      <td><?php echo $mostrar['rut'] ?></td>
      <td><?php echo $mostrar['usuario_idusuario'] ?></td>
      <td><input type="submit" value="✎"></td>
    </tr>

    <?php
    }
  ?>
  </tbody>
</table>
        
    </div>

</form>
  <br>
  <a href="recepcionista.php"><center><button type="button" class="btn btn-secondary">Volver</button></center></a>
    
    
    
    
    
    
    <!-- Optional JavaScript; choose one of the two! 

    <!-- Option 1: Bootstrap Bundle with Popper +
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
