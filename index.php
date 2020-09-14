<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rudisha | Home</title>
    <link href="assets/general/favicon.ico" rel="icon">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/main.css" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  </head>

  <body id="home">
    <section class="container">
      <?php include "_/components/php/utilities/index-header.php" ?>

      <div class="home-image-section">
        <div id="myCarousel" class="carousel hidden-xs slide">		
            <div class="carousel-inner">
                <div class="item active slide-div">
                    <figure>
                        <img src="assets/home/sliders/slider-solar.png" alt="Solar" width="1350" height="350">
                    </figure>
                    <div class="carousel-caption frt-carousel">
                        <h1>Rudisha</h1>

                        <h4 class="slide-title">
                            Providing ways of energy and cost saving in a 
                            time of high electricity prices and carbon emissions
                            which are constantly increasing
                        </h4>

                        <div class="more-btn">
                            <a href="solar_products.php">LEARN MORE</a></span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <figure>
                        <img src="assets/home/sliders/slider-fleet.jpeg" alt="Fleet" width="1350" height="350">
                    </figure>

                    <div class="carousel-caption snd-carousel">
                        <h1>Rudisha</h1>

                        <h4 class="slide-title">
                            We are here for you. With our tracking services, you or your
                            company have the freedom to explore knowing that we've got 
                            you covered
                        </h4>

                        <div class="more-btn">
                            <a href="vehicle_tracking.php">LEARN MORE</a></span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <figure>
                        <img src="assets/home/sliders/slider-camera.jpg" alt="Camera" width="1350" height="350">
                    </figure>

                    <div class="carousel-caption thd-carousel">
                        <h1>Rudisha</h1>

                        <h4 class="slide-title">
                            Ensure your business or residential properties 
                            are equipped with the best
                        </h4>

                        <div class="more-btn">
                            <a href="cctv_cameras">LEARN MORE</a></span>
                        </div>
                    </div>
                </div>
            </div> <!--Carousel inner-->
		
            <!--controls-->
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!--myCarousel-->
      </div> <!--image section-->
       <?php include "_/components/php/utilities/footer.php" ?>
    </section> <!--main container-->

	<script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>