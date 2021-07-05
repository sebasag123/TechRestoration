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

<!DOCTYPE html>
    <head>
        <title>Equipos Registrados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/csstech.css" rel="stylesheet" type="text/css">
    <img class="logo" id="logo" src="img/logo42.png">
    </head>
    
    <body>
         <h1 class="letrastitulos">Equipos Registrados</H1> 

        
           
<br>
<br>
<br>
<br>
           <select class="form-select" aria-label="Disabled select example" >
  <option selected>Seleccionar estado</option>
  <option name="Entregado" value="Entregado">Entregado</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
      
         <br>
<table class="table table-striped table-dark">



  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tipo</th>
      <th scope="col">Marca</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql = "SELECT * FROM ficha_tecnica";
$result = mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){

?>
    <tr>
      <th scope="row"><?php echo $mostrar['idficha_tecnica'] ?></th>
      <td><?php echo $mostrar['tipo_producto'] ?></td>
      <td><?php echo $mostrar['marca_producto'] ?></td>
      <td><?php echo $mostrar['estado'] ?></td>
    </tr>

    <?php
    }
  ?>
  
  </tbody>
 
</table>
     
    </body>