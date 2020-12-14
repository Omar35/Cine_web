<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>Cartelera</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/estilo/cartelera.css" rel="stylesheet">

     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="principal.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Cartelera</title>
  </head>

  <body>

    <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="cine.php" class="w3-bar-item w3-button"><b>CINEPLUS</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="cartelera.php" class="w3-bar-item w3-button">Cartelera</a>
      <a href="sucursales.php" class="w3-bar-item w3-button">Sucursales</a>
      <?php

      if(isset($_GET['user']))
      {	
        $usuario = $_GET['user'];
      echo '<p class="w3-bar-item w3-button">Bienvenido ' . $usuario .'</p>';
      }else{
        echo '<a href="login.php" class="w3-bar-item w3-button">Iniciar Sesión</a>';
      }
      ?>
      
    </div>
  </div>
</div>


    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">CINEPLUS Cartelera</h1>
          <p class="lead text-muted">A continuación se muestran las películas disponibles en cartelera.</p>
          <p>
            <a href="#" class="btn btn-success">Comprar entradas</a>
            
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
          <?php
            include 'connDB.php';
            $abirCon = OpenCon();

            $sqlQueryObtenerInfoPeli = "SELECT * FROM peliculas";
            $result = $abirCon-> query($sqlQueryObtenerInfoPeli);
            if($result->num_rows > 0)
            {
              $nombrePelicula = "";
              $restriccionEdad = "";
              $idioma = "";
              $duracion = "";
              $descripcion = "";
              while($fila = mysqli_fetch_array($result)){
                $nombrePelicula = $fila["nombre_pelicula"];
                $restriccionEdad = $fila["restriccion_edad"];
                $idioma = $fila["idioma"];
                $duracion = $fila["duracion"];
                $descripcion = $fila["descripcion"];

                switch ($restriccionEdad) {
                  case $restriccionEdad > 18:
                    $codigoEdad = "R";
                    break;
                  case $restriccionEdad > 13:
                    $codigoEdad = "PG-13";
                    break;
                  case $restriccionEdad > 8:
                    $codigoEdad = "PG";
                    break;
                  default:
                  $codigoEdad = "TP";
                }
                echo '<div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img src="/proyecto/Cine_web/media/'.$nombrePelicula.'.jpg" alt="House" style="width:100%">
                  <div class="card-body">
                    <p class="card-text">'.$descripcion.'</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">'.$codigoEdad.'</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">'.$idioma.'</button>
                      </div>
                      <small class="text-muted">'.$duracion.'</small>
                    </div>
                  </div>
                </div>
              </div>';
              }
              

            
            }
            else
            {
              echo $abirCon -> error;	
            }

            
          ?>
          </div>
        </div>
      </div>

    </main>

 
    <footer class="w3-center w3-black w3-padding-16">
  <p>Gracias por preferirnos!</a></p>
</footer>
        </p>
        
       <!-- <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p> -->
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/vendor/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/vendor/holder.min.js"></script>


    
  </body>
</html>
