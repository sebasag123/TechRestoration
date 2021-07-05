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
  <center><h2>Informacion Equipo</h2></center>

<form class="row g-3 needs-validation" novalidate>
  <div class="container-md">
  <div class="col-md-2" id="labels1">
    <label for="validationCustom01" class="form-label">Fecha Ingreso</label>
    <input type="text" class="form-control" id="validationCustom01"  readonly="" required>   
  </div>
  <div class="col-md-2" id="labels1">
    <label for="validationCustom01" class="form-label">Estatus</label>
    <input type="text" class="form-control" id="validationCustom01"  required>   
  </div>
        <div class="textarea">
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Daño Reportado y observaciones</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>    
    </div>
    <div class="textarea">
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentarios y actualizacion del técnico</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" readonly=""></textarea>
  </div>    
    </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01"  readonly="" required>
    <div class="valid-feedback">
      ✔✔
    </div>
    
   
  </div>
        <br>
  <div class="col-md-4">
    <label for="exampleInputEmail1" class="form-label">Tipo Equipo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" readonly="" required>
  </div>
                <br>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Marca</label>
    <input type="text" class="form-control" id="validationCustom03" readonly="" required>
    <div class="invalid-feedback">
      Ingrese un número de telefono válido.
    </div>
  </div>
        <br>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Modelo</label>
    <input type="text" class="form-control" id="validationCustom03" readonly="" required>
    <div class="invalid-feedback">
      Ingrese una dirección válida.
    </div>
  </div>
                <br>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">N° De Serie</label>
    <input type="text" class="form-control" id="validationCustom03" readonly="" required>
    <div class="invalid-feedback">
      Ingrese una dirección válida.
    </div>
  </div>
        
        
  <div class="botonequipo">
    <button class="btn btn-success" id="actequipo" type="submit">Actualizar Equipo</button>
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
