 <?php
 require_once "partials/header.php";
 ?>

<?php
    $image1 = "https://scontent.fcyw4-1.fna.fbcdn.net/v/t1.0-9/72074379_693549177829301_6768385948985065472_n.jpg?_nc_cat=111&_nc_oc=AQmlHiuHMCx6ojwIeLZtMzDi2j6c3eVoI8oUkDihOt_XPj5UVeb24QRG1pBXgWoAnCKZ30tOfjLrtFJO8Ava1Scq&_nc_ht=scontent.fcyw4-1.fna&oh=5638a1b8b12fff1adeeecff830279f6b&oe=5E5D42A3";
    $image2 = "https://scontent.fcyw4-1.fna.fbcdn.net/v/t1.0-9/70929365_693546271162925_2231787009842610176_n.jpg?_nc_cat=102&_nc_oc=AQkNLuH8QRwKc0jQAD_cx_SlvsTzfeFr1b2I8hoDO0jERpepSoK_F5-mV5CxsHLtLt5tX57jm-usER1MymKQoFOj&_nc_ht=scontent.fcyw4-1.fna&oh=7883b169517127adeb650c982bd4f5be&oe=5E4A1700";
    $image3 = "https://scontent.fcyw4-1.fna.fbcdn.net/v/t1.0-9/71202321_693552777828941_4151164068578721792_n.jpg?_nc_cat=107&_nc_oc=AQmfTFYZXzOJq2pKWXR2goAlKI47Ana3W8RIW6WKgwK5LD02V5WorYlgnS9HPMwcnlrbqn16GGvnO0PTUoDj3DwC&_nc_ht=scontent.fcyw4-1.fna&oh=543429d5b7423f828eadf13218d864aa&oe=5E5C2891";
?>

<main> 
<div class="jumbotron">
<div class="container">
        <div id="carouselFade" class="carousel slide carousel-fade mt-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <?php   echo "<img src= '$image1' class='d-block w-100' alt='...' height = '500px' width = '200px'>"; ?>
                </div>
                 <div class="carousel-item ">   
                    <?php   echo "<img src= '$image2' class='d-block w-100' alt='...' height = '500px' width = '200px'>"; ?>
                </div>
                <div class="carousel-item">
                    <?php   echo "<img src= '$image3' class='d-block w-100' alt='...' height = '500px' width = '200px'>"; ?>
                </div>
            </div><!--Inner-->
        <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Atras</span>
        </a>
        <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Adelante</span>
        </a>
    </div><!--carouselFade-->
    </div><!--Container -->
</div>

</main>

<?php
require_once "partials/footer.php";
?>

</body>
</html>