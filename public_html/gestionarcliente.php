<!doctype html>
<html>
<?php

$server="localhost";
$user="root";
$password="password";
$bd ="ejemplo.db";

$conexion = new mysqli($server,$user,$password,$bd);

if($conexion->connect_errno){
    die("LA CONEXION HA FALLADO" . $conexion->connect_errno);
}
session_start();


?>
  <head>
	  <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TechRestoration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
  
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">TechRestoration</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    <a class="nav-link" href="logout.php">Cerrar Sesión - <?php echo $_SESSION['username'] ?></a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recepcionista.php">
              <span data-feather="users"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Galería
            </a>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Personal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reporte
            </a>
          </li> -->
         
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestionar Cliente</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>  
      </div>

      <div class="in-flex" id="text1">

<div class="container-md">
<div class="tabla1">
  <form method="POST" action="informacionequiporecep.php">
<table class="table table-striped table-dark">
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
$idcliente_ficha = $_POST['idcliente'];
$sql = "SELECT * FROM ficha_tecnica WHERE cliente_idcliente = $idcliente_ficha";
$result = mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){

?>
<tr>
  <th scope="row"><?php echo $mostrar['idficha_tecnica'] ?></th>
  <td><?php echo $mostrar['tipo_producto'] ?></td>
  <td><?php echo $mostrar['marca_producto'] ?></td>
  <td><?php echo $mostrar['estado'] ?></td>
  <td><button id="boton" class="btn btn-outline-warning" type="submit" name="idficha_tecnica" value="<?php echo $mostrar['idficha_tecnica'] ?>">✍</button></td>
</tr>
<?php
}
?>
</tbody>
</table>
</form>
</div>
<form class="row g-3 needs-validation"  method="POST" action="updatecliente.php">
<?php
$idcliente = $_POST['idcliente'];
$sql = "SELECT * FROM cliente WHERE idcliente = $idcliente";
$result = mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_array($result)){

?>
<div class="col-md-4">
<label for="validationCustom01" class="form-label">Nombre</label>
<input type="text" name="Nombre_cliente" value="<?php echo $mostrar['Nombre_cliente'] ?>"  class="form-control" id="validationCustom01" required>
<input type="hidden" name="idcliente_new" value="<?php echo $mostrar['idcliente'] ?>" class="form-control" id="exampleInputNombre" aria-describedby="nombreHelp" required="">
<div class="valid-feedback">
  Ingrese nombre válido.
</div>
</div>
    <br>
<div class="col-md-4">
<label for="exampleInputEmail1" class="form-label">E-mail</label>
<input type="email" name="corre_electronico" class="form-control" value="<?php echo $mostrar['corre_electronico'] ?>"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
</div>
 <br>
<div class="col-md-4">
<label for="validationCustom03" class="form-label">Teléfono</label>
<input type="text" name="telefono" class="form-control" value="<?php echo $mostrar['telefono'] ?>"  id="validationCustom03" required>
<div class="invalid-feedback">
  Ingrese un número de telefono válido.
</div>
</div>
    <br>
<div class="col-md-4">
<label for="validationCustom03" class="form-label">Dirección</label>
<input type="text" name="direccion" class="form-control" value="<?php echo $mostrar['direccion'] ?>"  id="validationCustom03" required>
<div class="invalid-feedback">
  Ingrese una dirección válida.
</div>
</div>
            <br>
<div class="col-md-4">
<label for="validationCustom03" class="form-label">Ingresado por: </label>
<input type="text" name="usuario_idusuario" value="<?php echo $mostrar['usuario_idusuario'] ?>" readonly="" name="encargado" class="form-control" id="validationCustom03" placeholder="Ej: 1" required>
<div class="invalid-feedback">
</div>
</div>
<?php
}
?>  
</div>

<center><div class="botones">
  <button class="btn btn-dark" name="enviar" type="submit">Actualizar Cliente</button>
</div>
</form>
  <div class="botones">
<a href="registrarequipo.php"><button class="btn btn-danger" type="submit">Registrar Equipo</button></a>
</div></center>

      <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
        <br><br><br><br>
    <footer>
        <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
            <div class="col-12">
                <div class="row row-2">
                    <div class="col-sm-3 text-md-center">
                        <h5><span> <i class="fa fa-firefox text-light" aria-hidden="true"></i></span><b>Footer</b></h5>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0">Plataforma</li>
                            <li>Centro de Ayuda</li>
                            <li>Seguridad</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0">Customers</li>
                            <li>Casos de uso</li>
                            <li>Servicios adicionales</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 my-sm-0 mt-5">
                        <ul class="list-unstyled">
                            <li class="mt-0">Compañia</li>
                            <li>Acerca de nosotros</li>
                            <li>Carreras- <span class="Careers">SIGUENOS!</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2">
            <div class="col-12">
                <div class="row my-4 row-1 no-gutters">
                    <div class="col-sm-3 col-auto text-center"><small>&#9400; TECH RESTORATION 2021</small></div>
                    <div class="col-md-3 col-auto "></div>
                    <div class="col-md-3 col-auto"></div>
                    <div class="col my-auto text-md-left text-right "> <small> TECH RESTORATION <br>tech.restoration@tr.cl   <span><img src="https://i.imgur.com/TtB6MDc.png" class="img-fluid " width="25"></span> <span><img src="https://i.imgur.com/N90KDYM.png" class="img-fluid " width="25"></span></small> </div>
                </div>
            </div>
        </div>
    </footer>
</div>
    </main>
  </div>
</div>


      
<script src="js/jquery-3.5.1.min.js"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>');</script>
      <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script>
  </body>
</html>

