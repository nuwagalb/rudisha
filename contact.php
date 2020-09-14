<?php
    //function to process our data
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
    }

    //function to check if a form field contains any data.
    function empty_input_validator($data) {
        if ($data) {
            return $data;
        }
    }
    
    //set initial value of variables to empty string
    $name = $email = $subject = $details = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") { // run this function when the form has been submitted.
        $name = '';
    }

    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rudisha | Contact</title>
    <link href="assets/general/favicon.ico" rel="icon">
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/main.css" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  </head>

  <body id="contact">
    <section class="container">
      <?php include "_/components/php/utilities/header.php" ?>

      <div class="image-section">
        <div class="contact-image-area"></div>
      </div> <!--image section-->

      <div class="main-content-section">
        <div id="contact-title" class="row">
          <div class="col-lg-5"></div>
          <div class="col-lg-2">
            <h4>Get in touch</h4>
          </div>
          <div class="col-lg-5"></div>
        </div>

        <div class="row">
          <div id="contact-form" class="col-lg-6">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div>
                  <input name="name" type="text" value="<?php echo $name; ?>" placeholder="Name" required>
              </div>

              <div>
                  <input name="lname" type="text" value="<?php echo $lname; ?>" placeholder="Last Name" required>
              </div>

              <div>
                <textarea id="details" name="details" placeholder="Message" required>
                    <?php echo $details; ?>
                </textarea>
              </div>

              <div>
                <input name="email" type="email" value="<?php echo $email; ?>" placeholder="Email" required>
              </div>

              <div>
                <button type="submit">SEND A MESSAGE</button>
              </div>
            </form>
          </div>

          <div id="contact details" class="col-lg-6">
            <div>
              <p>ADDRESS</p>
              <p>
                Rudisha Limited, Moyo Close <br>
                Kampala, Uganda
              </p>
            </div>

            <div>
              <p>OPENING HOURS</p>
              <p>
                Open:  9:00 Am <br>
                Close: 5:00 Pm
              </p>
            </div>

            <div>
              <p>PHONE</p>
              <p>
                +256788178417 <br>
                +256759411227
              </p>
            </div>

            <div>
              <p>EMAIL</p>
              <p>
                info@rudisha.com <br>
                sales@rudisha.com
              </p>
            </div>
          </div>
        </div>

        

        <div class="contact-div">
            <h3>
                <a href="contact.php">Contact Us </a>Today
            </h3>
        </div>        
      </div> <!--main content section-->

      <?php include "_/components/php/utilities/footer.php" ?>
    </section> <!--main container-->

	<script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</div>