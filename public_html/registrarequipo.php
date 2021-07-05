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
  <center><h2>Registrar Equipos</h2></center>


<form class="row g-3 needs-validation" novalidate method="POST">


    <div class="container-md">
        <div class="textarea">
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Daño Reportado y observaciones</label>
    <textarea name="comentarios" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
  </div>    
    </div>
  <!-- <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="validationCustom01" value="Usuario ejemplo" required>
    <div class="valid-feedback">
      ✔✔
    </div> 
    
   
  </div> 
        <br> -->
  <div class="col-md-4">
    <label for="exampleInputEmail1" class="form-label">Tipo Equipo</label>
    <input type="text" name="tipo_producto" class="form-control" id="exampleInputEmail1"  required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Marca</label>
    <input type="text" name="marca_producto" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Ingrese una marca válida.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Modelo</label>
    <input type="text" name="modelo_producto" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Ingrese un modelo válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">N° De Serie</label>
    <input type="text" name="cod_serie_producto" class="form-control" id="validationCustom03"  required>
    <div class="invalid-feedback">
      Ingrese un N° de serie válido.
    </div>
    </div>
    <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Estado</label>
    <input type="text" name="estado" class="form-control" id="validationCustom03"  required>
    <div class="invalid-feedback">
      Ingrese un estado válido.
    </div>
    </div>
    <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Fecha</label>
    <input type="date" name="fecha_entrada" min="2021-01-01" max="2021-12-31" class="form-control" id="validationCustom03" required >
    <div class="invalid-feedback">
      Ingrese una fecha válida.
    </div>
    </div>
    <div class="col-md-4">
    <label for="validationCustom03" class="form-label">ID Cliente</label>
    <input type="text" name="cliente_idcliente" class="form-control" id="validationCustom03"  required>
    <div class="invalid-feedback">
      Ingrese un estado válido.
    </div>
  </div>
        
        
  <div class="botones">
    <button name="enviar" class="btn btn-success" type="submit">Registrar Equipo</button>
  </div>
</div>

</form>
  <br>
  <a href="recepcionista.php"><center><button type="button" class="btn btn-secondary">Volver</button></center></a>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
<?php

if(isset($_POST['enviar'])){
  
  $tipoequipo = $_POST["tipo_producto"];
  $marca = $_POST["marca_producto"];
  $modelo = $_POST["modelo_producto"];
  $n_serie = $_POST["cod_serie_producto"];
  $estado = $_POST["estado"];
  $fecha_entrada = $_POST["fecha_entrada"];
  $idcliente = $_POST["cliente_idcliente"];
  $comentarios = $_POST["comentarios"];

  $insertarDatos = "INSERT INTO ficha_tecnica VALUES ('idficha_tecnica','$tipoequipo','$n_serie', '$marca', '$comentarios','$fecha_entrada','','$modelo', '$idcliente', '$estado') ";

  $ejecutarInsertar = mysqli_query($conexion,$insertarDatos);
  
  if(!$ejecutarInsertar){
    echo"ERROR EN LINEA SQL";
  }

}

?>

