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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/csstech.css" rel="stylesheet" type="text/css">
    
    <title>TechRestoration</title>
    <img class="logo" id="logo" src="img/logo42.png">
  </head>
  <body>
  <center><h2>Gestionar Cliente</h2></center>

  

    <div class="container-md">
  <div class="tabla1">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Equipo</th>
      <th scope="col">Tipo Equipo</th>
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
      <td><a href="registrarequipo.php"> <input type="submit" value="✎"></a></td>
    </tr>
    <?php
    }
  ?>
  </tbody>
</table>
    </div>
    <form class="row g-3 needs-validation"  method="POST" action="informacionequipo.php">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
  
    <input type="text" class="form-control" id="validationCustom01" required>
    <div class="valid-feedback">
      ✔✔
    </div>
    
   
  </div>
        <br>
  <div class="col-md-4">
    <label for="exampleInputEmail1" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
                <br>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Teléfono</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Ingrese un número de telefono válido.
    </div>
  </div>
        <br>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Dirección</label>
    <input type="text" name="" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Ingrese una dirección válida.
    </div>
  </div>
                <br>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Ingresado por: </label>
    <input type="text" name="encargado" class="form-control" id="validationCustom03" placeholder="Ej: 1" required>
    <div class="invalid-feedback">
    </div>
  </div>
        
        
  <div class="botones">
      
      <button class="btn btn-success" type="submit">Actualizar Cliente</button>
  </div>

</form>

  </div>
      <center><div class="botones1">
  <a href="registrarequipo.php"><button class="btn btn-success" type="submit">Registrar Equipo</button></a>
</div></center>
  <br>
  <a href="recepcionista.php"><center><button type="button" class="btn btn-secondary">Volver</button></center></a>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
