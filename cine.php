<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="principal.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Principal</title>
</head>
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="cine.php" class="w3-bar-item w3-button"><b>CINEPLUS</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="cartelera.php" class="w3-bar-item w3-button">Cartelera</a>
      <a href="sucursales.php" class="w3-bar-item w3-button">Sucursales</a>
      <a href="login.php" class="w3-bar-item w3-button">Iniciar Sesión</a>
    </div>
  </div>
</div>



<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Películas</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Mulan</div>
        <img src="/proyecto/Cine_web/media/Mulan.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Tenet</div>
        <img src="/proyecto/Cine_web/media/Tenet.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Wonder Woman 1984</div>
        <img src="/proyecto/Cine_web/media/WonderWoman.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Sherlock Holmes 3</div>
        <img src="/proyecto/Cine_web/media/Sherlock.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Black Widow</div>
        <img src="/proyecto/Cine_web/media/BlackWidow.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">The Conjuring</div>
        <img src="/proyecto/Cine_web/media/Conjuring.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Sobre Nosotros</h3>
    <p>Somos CINEPLUS y nuestro propósito es hacer sentir a los clientes bastante cómodos
    para que tengan una experiencia increíble tanto en la página web como en el establecimiento. Nuestro emprendimiento
    nace como fruto de un proyecto universitario.
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/proyecto/Cine_web/media/Omar.png"  style="width:100%">
      <h3>Omar Herrera</h3>
      <p class="w3-opacity">CEO & Fundador</p>
      <p><button class="w3-button w3-light-grey w3-block">Contactar</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/proyecto/Cine_web/media/Girls.png"  style="width:100%">
      <h3>Nathalia Hernandez</h3>
      <p class="w3-opacity">CEO & Fundadora</p>
      <p><button class="w3-button w3-light-grey w3-block">Contactar</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/proyecto/Cine_web/media/Girls.png"  style="width:100%">
      <h3>Maria Jose Uribe</h3>
      <p class="w3-opacity">CEO & Fundadora</p>
      <p><button class="w3-button w3-light-grey w3-block">Contactar</button></p>
    </div>
    
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contáctenos</h3>
    <p>Completa los siguientes espacios para saber de ti.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Nombre" required name="Nombre">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Correo" required name="Correo">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Tema" required name="Tema">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comentario" required name="Comentario">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> ENVIAR
      </button>
    </form>
  </div>
  
<!-- Image of location/map -->
<div class="w3-container">
  <img src="/proyecto/Cine_web/img/CINEPLUS.jpg" class="w3-image" style="width:700px" >
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Gracias por preferirnos!</a></p>
</footer>
<!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>


</html>