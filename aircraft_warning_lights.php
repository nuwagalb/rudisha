<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rudisha | Aircraft Warning Lights</title>
    <link href="assets/general/favicon.ico" rel="icon">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/main.css" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  </head>

  <body id="aircraft-lights">
    <section class="container">
      <?php include "_/components/php/utilities/header.php" ?>

      <div class="main-content-section">
        <div class="aircraft-lights-title">
            <h1>Aircraft Warning Lights</h1>
        </div>

        <div class="aircraft-lights-prd-title">
            <h4>Products</h4>
        </div>

        <div class="aircraft-lights-one-row row">
            <div class="col-lg-4">
                <a href="#" title="Product 1">
                    <img src="assets/aircraft-warning-lights/awl-1.png" alt="" width="350" height="300">
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" title="Product 2" title="Product 2">
                    <img src="assets/aircraft-warning-lights/awl-2.png" alt="" width="350" height="300">
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" title="Product 3">
                    <img src="assets/aircraft-warning-lights/awl-3.png" alt="" width="350" height="300">
                </a>
            </div>
        </div> <!--First products row-->

        <div class="aircraft-lights-two-row row">
            <div class="col-lg-4">
                <a href="#" title="Product 4">
                    <img src="assets/aircraft-warning-lights/awl-4.png" alt="" width="350" height="300">
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" title="Product 5" title="Product 5">
                    <img src="assets/aircraft-warning-lights/awl-base-controller-1.png" alt="" width="350" height="300">
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" title="Product 6">
                    <img src="assets/aircraft-warning-lights/awl-base-controller-2.png" alt="" width="350" height="300">
                </a>
            </div>
        </div> <!--Second products row-->

        <div class="air-craft-warning-pagn row">
            <div class="col-lg-5"></div>
            <div class="col-lg-2">
                <nav aria-label="Aircraft Warning Lights">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-5"></div>        
        </div> <!--end of aircraft pagination-->
      </div> <!--main content section-->

      <?php include "_/components/php/utilities/footer.php" ?>
    </section> <!--main container-->

	<script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>