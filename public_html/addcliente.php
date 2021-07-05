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

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/csstech.css" rel="stylesheet" type="text/css">
    <title>TechRestoration</title>
    <img class="logo" id="logo" src="img/logo42.png">
  </head>

  <body>
  <center><h2>Agregar Cliente</h2></center>
  
<form class="row g-3 needs-validation" method="POST" name="formulario">

    <div class="container-md">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nombre y Apellido</label>
    <input type="text" name="Nombre_cliente" class="form-control" id="validationCustom01" placeholder="Ej: Juan" required>
    <div class="valid-feedback">
      ✔✔
    </div>
  </div>
        <br>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">RUT</label>
    <input type="text" name="rut" class="form-control" id="validationCustom03" placeholder="Ej: 99999999-1" required>
    <div class="invalid-feedback">
      Ingrese un rut válido.
    </div>
  </div>
        <br>
        <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Teléfono</label>
    <input type="text" name="telefono" class="form-control" id="validationCustom03" placeholder="Ej: 999999999" required>
    <div class="invalid-feedback">
      Ingrese un número de telefono válido.
    </div>
  </div>
        <br>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">E-mail</label>
    <input type="email" name="corre_electronico" class="form-control" id="exampleInputEmail1" placeholder="Ej: ejemplo@ejemplo.cl" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">No se compartirá tu correo con nadie</div>
  </div>
                <br>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Dirección</label>
    <input type="text" name="direccion" class="form-control" id="validationCustom03" placeholder="Ej: zurita 1234" required>
    <div class="invalid-feedback">
      Ingrese una dirección válida.
    </div>
  </div>
        <br>
    <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ingresado por: </label>
    <select id="cars" name="usuario_idusuario">
  <option value="1">Admin</option>
  <option value="2">Recepcionista</option>
</select>
    <div class="invalid-feedback">
    Ingrese dato válido.
    </div>
  </div>
  <br>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Aceptar términos y condiciones
      </label>
      <div class="invalid-feedback">
        Debes aceptar los términos para continuar
      </div>
    </div>
  </div>
        <br>
  <div class="col-12">
    <button name="enviar" class="btn btn-success" type="submit">ENVIAR</button>
  </div>
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
<?php

if(isset($_POST['enviar'])){
  $nombre = $_POST["Nombre_cliente"];
  $rut = $_POST["rut"];
  $email = $_POST["corre_electronico"];
  $telefono = $_POST["telefono"];
  $direccion = $_POST["direccion"];
  $encargado = $_POST["usuario_idusuario"];

  $insertarDatos = "INSERT INTO cliente VALUES ('','$nombre','$rut', '$telefono', '$email','$encargado', '$direccion') ";

  $ejecutarInsertar = mysqli_query($conexion,$insertarDatos);
  
  if(!$ejecutarInsertar){
    echo"ERROR EN LINEA SQL";
  }

}

?>