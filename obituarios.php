<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funerales Izquierdo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilObituario.css">
    
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>

<body>

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
<a class="navbar-brand" href="index.php">
    <img src="images\logo.jpg" width="30" height="30" alt="">
    Funerales Izquierdo
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarMenu" aria-controls="navbarMenu" 
            aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>   
  <div class="collapse navbar-collapse" id="navbarMenu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="conocenos.php">Quienes Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="obituarios.php">Obituarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ubicacion.php">Ubicación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="muestrario.php">Muestrario</a>
      </li>
    </ul>
  </div>
</nav>

<main>
  
<main>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicadores -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <?php
            for($i=1;$i<5;$i++){
             echo "<li data-target='#demo' data-slide-to='$i'></li>";
            } 
          ?>
        </ul>
        
        <!-- contenido -->
        <div class="carousel-inner">
          <div class="carousel-item active">
          <?php
            $url="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcReoa0m8_4EE0foaO5t7iG_NedfBZDp5xekqycJJkd_aNUtn5u2";
            echo "<img src='$url'  width='300' height='100'>"; 
          ?>
          </div>
         
          <?php
          for($i=1;$i<5;$i++){
            echo "<div class='carousel-item'>";
            $url="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcReoa0m8_4EE0foaO5t7iG_NedfBZDp5xekqycJJkd_aNUtn5u2";
             echo "<img src='$url'  width='300' height='100'>"; 
            echo"</div>";
           }
          ?>
           
        </div>
        
        <!-- flechas de navegacion -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    <!---Carrusel-->
</main>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script><!---Navbar--->
    
</body>
</html>
