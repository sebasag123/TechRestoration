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
        <h1 class="h2">Registrar equipos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>  
      </div>

      <div class="in-flex" id="text1">

      <form class="row g-3 needs-validation" novalidate method="POST">


    <div class="container-md">
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
  <div class="textarea">
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Daño Reportado y observaciones</label>
    <textarea name="comentarios" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
  </div>    
    </div>    
       
  <div class="botones">
    <button name="enviar" class="btn btn-dark" type="submit">Registrar Equipo</button>
  </div>
</div>

</form>

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

  $insertarDatos = "INSERT INTO ficha_tecnica VALUES ('idficha_tecnica','$tipoequipo','$n_serie', '$marca', '$comentarios','$fecha_entrada','','$modelo', '$idcliente', '$estado', '') ";

  $ejecutarInsertar = mysqli_query($conexion,$insertarDatos);
  
  if(!$ejecutarInsertar){
    echo"ERROR EN LINEA SQL";
  }

}

?>

