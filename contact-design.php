<?php















	//capture details data
	if(empty($_POST["details"])) { 
        echo "<script> alert(\"Please enter a message\"); </script>";
			} else {
        $details = test_input($_POST["details"]);

        $subject = "RUDISHA CLIENT MESSAGE";

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
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//define variables and set to empty values
	$name = $email = $phone_no = $organisation = $role = $subject = $details = $message = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") { // run this function when the form has been submitted.
			//capture phone field data
			if(empty($_POST["phone_no"])) { 
				$phone_no = "";
			} else {
				$phone_no = test_input($_POST["phone_no"]);
			}

			//capture organisation field data
			if(empty($_POST["organisation"])) { 
				$organisation = "";
			} else {
				$organisation = test_input($_POST["organisation"]);
			}

			//capture role field data
			if(empty($_POST["role"])) { 
				$role = "";
			} else {
				$role = test_input($_POST["role"]);
			}

			//capture details field data
			if(empty($_POST["details"])) { 
				$details = "";
			} else {
				$details = test_input($_POST["details"]);
			}
			
			//validate name field
			if (empty($_POST["fname"])) { 
					echo "<script>" . "alert(\"Please enter your name.\");" .  "</script>";	  	
			} else {
				$name = test_input($_POST["fname"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					echo "<script> alert(\"Only letters and white space are allowed. Please enter your correct name.\"); </script>";
				} elseif (empty($_POST["email"])) { //validate email field
							echo "<script> alert(\"Please enter your email\"); </script>";
					} else{
						$email = test_input($_POST["email"]);
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							echo "<script> alert(\"Please enter your valid email address\"); </script>";
						} elseif (empty($_POST["subject"])){ //validate subject field
							echo "<script> alert(\"You need to specify the subject of your Comment or Suggestion\"); </script>";
						} else {
							$subject = test_input($_POST["subject"]);
							
							$message = "<html>
											<head>
												<title>UKATIS CONTACT INFORMATION</title>
											</head>
											<body>
												Name: " . $name . "<br />" . "<br />" . 
												"Email: " . $email . "<br />" . "<br />" .
												"Telephone: " . $phone_no . "<br />" . "<br />" .
												"Organisation: " . $organisation . "<br />" . "<br />" .
												"Role in Organisation: " . $role . "<br />" . "<br />" .
												"Subject: " . $subject . "<br />" . "<br />" .
												"Details of subject: " . $details . 
											"</body>
										</html>";
							
							//send mail through using PHPMailer
							//require("C:wamp/www/ukatis/PHPMailer/class.phpmailer.php");
							require("/home/DM_5438/ukatis.org.uk/PHPMailer/class.phpmailer.php");
							
							$myMail = new PHPMailer();
							
							$myMail->IsSMTP();
							
							//$myMail->Host = "smtp.gmail.com";
							$myMail->Host = "mail.ukatis.org.uk";
							
							$myMail->SMTPAuth = true;
							
							//$myMail->Username = "isnuwa@gmail.com";
							$myMail->Username = "info@ukatis.org.uk";
							
							//$myMail->Password = "nuwagalb@";
							//$myMail->SMTPSecure = "tls";
							//$myMail->Port = 587;
							$myMail->Password = "info@ukatis12345";
							$myMail->SMTPSecure = "tls";
							$myMail->Port = 25;
							
							//$myMail->setFrom($email, $name);
							$myMail->setFrom("info@ukatis.org.uk");
							$myMail->FromName = "UKATIS CONTACT FORM";
							
							$myMail->addAddress("info@ukatis.org.uk");
							$myMail->AddReplyTo($email);
							
							$myMail->WordWrap = 70;
							$myMail->IsHTML(true);
							
							$myMail->Subject = $subject;
							$myMail->Body = $message;
							
							if(!$myMail->Send()) {
								echo "<script>
										alert(\"Message could not be sent. Please try again. Mailer Error: " . $myMail->ErrorInfo . 
										"\")</script>";
								exit;
							}
							
							echo "<script>alert(\"Message has been sent\")</script>";
							exit;
						} 
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
<!-- Top red horizontal line-->
<div class="row">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-6" style="margin-left: 114px;">
		<hr class="double-line">
	</div>
	<div class="col-sm-4"></div>
</div> <!--horizontal line-->

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-6" style="margin-left: 114px;">
		<h4 style="color: #e60000; margin-bottom: 40px;">Your address, comment or suggestion</h4>
		<h6 style="margin-bottom: 40px;">Note: Fields marked with (*) are required</h6>
		<h6 style="margin-bottom: 40px;">Please help us respond to your comments by supplying the following details</h6>
	</div>
	<div class="col-sm-4"></div>
</div> <!--title and requirements-->

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-7" style="margin-left: 114px;">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="contact_form">
			<label style="font-size: 12px; margin-right: 200px;">Your name <text style= "color: #e60000;">*</text></label>
			<input id="name" name="fname" type="text" style="width: 48%;" value="<?php echo $name;?>">
			<br />
			<br />
			<label style="font-size: 12px; margin-right: 148px;">Your e-mail address <text style= "color: #e60000;">*</text></label>
			<input id="address" name="email" type="text" style="width: 48%;" value="<?php echo $email;?>">
			<br />
			<br />
			<label style="font-size: 12px; margin-right: 138px;">Your telephone number</label>
			<input id="phone" name="phone_no" type="text" style="width: 48%;" value="<?php echo $phone_no;?>">
			<br />
			<br />
			<label style="font-size: 12px; margin-right: 170px;">Your organisation</label>
			<input id="organisation" name="organisation" type="text" style="width: 48%;" value="<?php echo $organisation;?>">
			<br />
			<br />
			<label style="font-size: 12px; margin-right: 88px;">Your role within the organisation</label>
			<input id="role" name="role" type="text" style="width: 48%;" value="<?php echo $role;?>">
			<br />
			<br />
			<label style="font-size: 12px; margin-right: 218px;">Subject <text style= "color: #e60000;">*</text></label>
			<input id="subject" name="subject" type="text" style="width: 48%;" value="<?php echo $subject;?>">
			<br />
			<br />
			<label style="font-size: 12px; margin-right: 82px; float: left;" >Specific details about your inquiry</label>
			<textarea id="details" name="details" rows="2" cols="50"><?php echo $details;?></textarea>
			<br />
			</br>
			<button type="submit" style="width: 36%;">Submit </button>
		</form>
		<br />
	</div>
	<div class="col-sm-1"></div>
</div>
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-6" style="margin-left: 114px;">
		<hr class="double-line">
	</div>
	<div class="col-sm-4"><br /></div>
</div> <!--horizontal line-->
