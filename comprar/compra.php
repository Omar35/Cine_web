<?php

	include '../connDB.php';
  $conn = OpenCon();


  if(isset($_GET['id_peli']))
	{	
      $pelicula = $_GET['id_peli'];
      //echo "<script>console.log('Debug Objects: " . $pelicula . "' );</script>";
      $tandas = "CALL MostrarTandas($pelicula)"; 
      $listaTandas = $conn -> query($tandas);
  }

  CloseCon($conn);

   $usuarioID=0;
  if(isset($_GET['user']))
  {	
    $conn = OpenCon();
    $usuario = $_GET['user'];
    $procUser = "CALL MostrarUsuario('" . $usuario . "')";
    $usuarioIDArray = $conn -> query($procUser);
    echo "<script>console.log('Debug Objects: " . $usuario . "' );</script>";
    CloseCon($conn);
    while($fila = mysqli_fetch_array($usuarioIDArray))
    {
      $usuarioID = $fila["user_id"];
    }	
  }

  

  $conn = OpenCon();
  if(isset($_POST['btnConfirmarReserva']))
	{
    
    $proyeccionID = $_POST['cboTandas'];
    $listaAsientos = $_POST['multiAsientos'];
    $cantidadAsientos = count($listaAsientos);
    
    
    //echo "<script>console.log('Debug Objects: " . $listaAsientosString . "' );</script>";
		
		$procReserva = "call ConfirmarReserva($usuarioID, $proyeccionID,$cantidadAsientos)";
		
    
    $idNewReservaArray = $conn -> query($procReserva);
    //echo "<script>console.log('Debug Objects: " . $idNewReservaArray . "' );</script>";
    CloseCon($conn);

    $idNewReserva = 0;
    while($fila = mysqli_fetch_array($idNewReservaArray))
    {
      //echo "<script>console.log('Debug Objects: " . $fila[0] . "' );</script>";
      $idNewReserva = $fila[0];
    }	

    echo "<script>console.log('Debug Objects: " . $idNewReserva . "' );</script>";
		if($idNewReserva)
		{
      foreach ($listaAsientos as $value){
        $conn = OpenCon();
        $procAsientoReserva = "call RegistrarAsientoReserva($idNewReserva, '" . $value . "')";
        echo "<script>console.log('Debug Objects: " . $value . "' );</script>";
        $conn -> query($procAsientoReserva);
        CloseCon($conn);
      }
      //header("Location: compra.php?user=$usuario&id_peli=$pelicula");
		}
		else		
		{
			echo "Error:" ;			
		}
  }
  

  $conn = OpenCon();
  $asientos = "CALL MostrarAsientos()"; 
  $listaAsientos = $conn -> query($asientos);


  CloseCon($conn);
  ?>
  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Compra</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="principal.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Bootstrap core CSS -->
    <!--<link href="../css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <!--<link href="form-validation.css" rel="stylesheet"> -->
  </head>

  <body class="bg-light">

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

    <div class="container">
      <div class="py-5 text-center">
        <h2>Reserva de Boletos</h2>
        <p class="lead">A continuacion podra hacer la reserva de sus boletos</p>
      </div>

      <div class="row">
        
        <div class="col-md order-md-1">
          <h4 class="mb-3">Informacion Personal</h4>
          <form class="needs-validation" action="" method="post">
            

            <div class="mb-3">
              <label for="username">Usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <?php
				          
                  echo "<input type='text' class='form-control' id='username' placeholder='Username' value=" . $usuario ." name='cboUsuario' required>";
				          				
				        ?>
                
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="tandas">Tandas</label>
              <select class="custom-select d-block w-100" id="tandas"  name= 'cboTandas' required>
                <?php
				          while($fila = mysqli_fetch_array($listaTandas))
				          {
                    echo "<option value=" . $fila["id_proyeccion"] . ">" . $fila["fecha"] . " - " . $fila["hora"] . " - " .$fila["id_sala"] . "</option>";
				          }					
				        ?>
              </select>
            </div>

            <div class="mb-3">
              <label for="tandas">Asientos</label>
              <select class="custom-select d-block w-100" id="asientos" name= 'multiAsientos[]' multiple required>
                <?php
				          while($fila = mysqli_fetch_array($listaAsientos))
				          {
                    echo "<option value=" . $fila["id_asiento"] . ">" . $fila["id_sala"] . " - " . $fila["fila"] . " - " .$fila["numero"] . "</option>";
				          }					
				        ?>
              </select>
            </div>
            <hr class="mb-4">
            
            <input type="submit"  class="btn btn-dark" name="btnConfirmarReserva" value="Confirmar Reservar"/>
            <hr class="mb-4">
          </form>
        </div>
      </div>

      
    </div>

    <footer class="w3-center w3-black w3-padding-16">
      <p>Gracias por preferirnos!</a></p>
      
       <!-- <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p> -->
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!--<script src="../js/vendor/holder.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>-->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
