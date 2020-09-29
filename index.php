<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rudisha | Home</title>

    <link href="images/general/favicon.ico" rel="icon">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
  </head>

  <body id="home">
    <section class="container">
      <?php include "utilities/index-header.php" ?>

      <div class="home-image-section">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="images/general/slider-solar.png" alt="Solar Solutions">
                
                <div class="carousel-caption">
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
                <img src="images/general/slider-fleet.jpeg" alt="Fleet Management">
                
                <div class="carousel-caption">
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
                <img src="images/general/slider-camera.png" alt="CCTV Cameras">

                <div class="carousel-caption">
                  <h1>Rudisha</h1>

                  <h4 class="slide-title">
                      Ensure your business or residential properties 
                      are equipped with the best
                  </h4>

                  <div class="more-btn">
                      <a href="cctv_cameras.php">LEARN MORE</a></span>
                  </div>
                </div>
              </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
        </div>
      </div> <!--image section-->


       <?php include "utilities/footer.php" ?>
    </section> <!--main container-->

	  <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
  </body>
</html>