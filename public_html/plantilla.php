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
      <a class="nav-link" href="#">Inicio</a>
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
        <h1 class="h2">Modificar Usuario</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>  
      </div>

      <div class="in-flex" id="text1">

      <form>

            <div class="container-index">

                <h4> Registrar Usuarios</h4>
                <br>

                <div class="form-group">
                    <label for="exampleInputNombre"><b> Nombre</b></label>
                    <input type="text" class="form-control" id="exampleInputNombre" aria-describedby="nombreHelp" placeholder="Nombre" required="">

                </div>
                <br>
                
                <div class="form-group">
                    <label for="exampleInputEmail"><b> Email</b></label>
                    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" required="">

                </div>
                <br>
                
                <div class="form-group">
                    <label for="exampleInputTelefono"><b> Telefono</b></label>
                    <input type="text" class="form-control" id="exampleInputTelefono" aria-describedby="telefonoHelp" placeholder="Telefono" required="">

                </div>
                <br>
                
                <div class="form-group">
                    <label for="exampleInputPermisos"><b> Permisos de:</b></label>
                    <td>

                     <select name "ingrese estado">
                         <option value ="1"> Administrador</option>
                         <option value ="2"> Recepcionista</option>
                         <option value ="3"> Tecnico</option>

                     </select>

                    </td>
                </div>
                <br>
                
                <div class="form-group">
                    <label for="exampleInputUsuario2"><b> Usuario</b></label>
                    <input type="text" class="form-control" id="exampleInputUsuario2" aria-describedby="usuarioHelp" placeholder="Usuario" required="">

                </div>
                <br>
                
                <div class="form-group">
                    <label for="exampleInputPermisos"><b> Permisos de:</b></label>
                    <td>

                     <select name "ingrese estado">
                         <option value ="1"> Activo</option>
                         <option value ="2"> Inactivo</option>
                         

                     </select>

                    </td>
                </div>
                
                <div class="form-group">
                    
                    <center>  <input type="submit" value="Actualizar Usuario" class="btn btn-success" id="btnActualizarUsuario"></center>
                    
                </div>
                <br>
                <div class="form-group">
                    
                    <a href="RestaurarContrasena.jsp"><center><button type="button" class="btn btn-success">Restaurar Contrasena</button></center></a>
                    
                </div>
            </div>
            <section class="contenidoDinamico" id="contenidoDinamico">

            </section>
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
