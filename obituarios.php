<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funerales Izquierdo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<?php
 require_once "partials/header.php";
 ?>
  
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
<?php
require_once "partials/footer.php";
?>

</body>
</html>
