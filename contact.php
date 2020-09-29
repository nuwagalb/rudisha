<?php
  //define variables and set to empty values
  $name = $details = $email = $subject = $to = $subject = $message = $headers = "";
	
	if (isset($_POST['submit'])) { // run this function when the form has been submitted.
			//capture name data
			if(empty($_POST["name"])) {
        echo "<script>" . "alert(\"Please enter your name.\");" .  "</script>";
			} else {
        $name = test_input($_POST["name"]);
        
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          echo "<script> alert(\"Only letters and white space are allowed. Please enter your correct name.\"); </script>";
        }
      }

      if(empty($_POST["details"])) { 
        echo "<script> alert(\"Please enter a message\"); </script>";
			} else {
        $details = test_input($_POST["details"]);
      }

      //capture email data
			if(empty($_POST["email"])) { 
        echo "<script> alert(\"Please enter your email\"); </script>";
			} else {
        $email = test_input($_POST["email"]);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<script> alert(\"Please enter a valid email address\"); </script>";
        }

        $to = "info@rudishalimited.com";
        $subject = "Message from Customer";
        $message = "<html>
						<head>
							<title>RUDISHA CONTACT INFORMATION</title>
						</head>
						<body>
							Name: " . $name . "<br />" . "<br />" . 
							"Email: " . $email . "<br />" . "<br />" .
							"Subject: " . $subject . "<br />" . "<br />" .
							"Details of subject: " . $details . 
						"</body>
          </html>";
        $headers="From: ".$email;

        if (mail($to, $subject, $message, $message)) {
          echo "<script> alert(\"Thank you for contacting us. We will get back to you shortly\"); </script>";
        } else {
          echo "Your message could not be sent. We are working to resolve the issue.";
        }
      }

      
  }

	//function to process our data
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rudisha | Contact</title>

    <link href="images/general/favicon.ico" rel="icon">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body id="contact">
    <section class="container-fluid">
      <?php include "utilities/header.php" ?>

      <div class="image-section row">
        <div class="contact-image-area"></div>
      </div> <!--image section-->

      <div class="main-content-section row">
        <div class="row">
          <div class="contact-title col-lg-12">
            <h1>Get in touch</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-2"></div>
          <div class="contact-form col-lg-4">
            <form method="POST" action="contact.php">
              <div class="form-inp">
                  <input name="name" type="text" value="<?php echo $name; ?>" placeholder="Name" required>
              </div>

              <div class="form-inp">
                <textarea placeholder="Message" id="details" name="details" required><?php echo $details;?></textarea>
              </div>

              <div class="form-inp">
                <input name="email" type="email" value="<?php echo $email; ?>" placeholder="Email" required>
              </div>

              <div class="form-btn">
                <button type="submit" name="submit">SEND A MESSAGE</button>
              </div>
            </form>
          </div>

          <div class="col-lg-4">
            <div class="contact-details">
              <span>ADDRESS</span>
              <p>
                Rudisha Limited, Moyo Close <br>
                Kampala, Uganda
              </p>
            </div>

            <div class="contact-details">
              <span>OPENING HOURS</span>
              <p>
                Open:  9:00 Am <br>
                Close: 5:00 Pm
              </p>
            </div>

            <div class="contact-details">
              <span>PHONE</span>
              <p>
                +256788178417 <br>
                +256759411227
              </p>
            </div>

            <div class="contact-details">
              <span>EMAIL</span>
              <p>
                info@rudishalimited.com <br>
                sales@rudishalimited.com
              </p>
            </div>
          </div>
        </div> <!--end of form row-->
        <div class="col-lg-2"></div>
        
        <div class="contact-div row">
          <a href="contact.php"><h3>Contact Us Today</h3></a>
        </div>
      </div> <!--main content section-->

      <?php include "utilities/footer.php" ?>
    </section> <!--main container-->

	  <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
  </body>
</div>