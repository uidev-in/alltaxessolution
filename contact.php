<?php


$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
	if (empty($phone)) {
        $errors[] = 'Phone number is empty';
    }
    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (empty($errors)) {
        $toEmail = 'sandyy1216@gmail.com';
        $emailSubject = 'New email from your contant form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}","Phone: {$phone}" , "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: alltaxessolution/index.php');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
        <title>Contact Us | All Taxes Solution</title>
        
		<?php include 'include/head.php';?>
		
		
	</head>
	<body id="bg">
    <?php include 'include/header.php';?>

    <!-- Bredcum -->
    <div class="breadcrumbs overlay" style="background-image:url('img/bredcum.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Contact Us</h2></div>
						</div>
					</div>
				</div>
			</div>
        </div>
        
<!-- Get in touch -->
<style>
.contact-details{background-color:#F2F4FF;}
</style>
<section class="contact-details section-space">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-contact-box address">
                <div class="c-icon"><i class="fa fa-clock-o"></i></div>
								<div class="c-text">
									<h4>Address</h4>
									<p>1J-36, Near Nath Chowk<br>NIT Faridabad HR - 121001</p>
								</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-box contact-number">
                <div class="c-icon"><i class="fa fa-phone"></i></div>
								<div class="c-text">
									<h4>Call Us Now</h4>
									<p>Mob.: +91-8527437878<br> Mob.: +91-8700664310</p>
								</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class=" single-contact-box email-address">
                <div class="c-icon"><i class="fa fa-envelope-o"></i></div>
								<div class="c-text">
									<h4>Email Us</h4>
									<p>contact@alltaxessolution.com<br>info@alltaxessolution.com</p>
								</div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- contact-form-with-map -->
<section class="contact-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<h4>Get In Touch</h4>
							<form class="form" method="post" action="contact.php" id="contact-form">
								<?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="name" placeholder="First Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="last_name" placeholder="Last Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-envelope"></i></div>
											<input type="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-phone"></i></div>
											<input type="tel" name="phone" placeholder="Mobile No.">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group textarea">
											<div class="icon"><i class="fa fa-pencil"></i></div>
											<textarea type="textarea" name="message" rows="5"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="bizwheel-btn theme-2">Send Now</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="google-map m-top-30">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="487" height="530" id="gmap_canvas" src="https://maps.google.com/maps?q=faridabad&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:530px;width:487px;}.gmap_canvas {overflow:hidden;background:none!important;height:530px;width:487px;}</style></div>
                        </div>
					</div>
				</div>
			</div>
		</section>

    	<?php include 'include/footer.php';?>
		<?php include 'include/script.php';?>
		<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script>
      const constraints = {
          name: {
              presence: { allowEmpty: false }
          },
          email: {
              presence: { allowEmpty: false },
              email: true
          },
          message: {
              presence: { allowEmpty: false }
          }
      };

      const form = document.getElementById('contact-form');

      form.addEventListener('submit', function (event) {
          const formValues = {
              name: form.elements.name.value,
              email: form.elements.email.value,
              message: form.elements.message.value
          };

          const errors = validate(formValues, constraints);

          if (errors) {
              event.preventDefault();
              const errorMessage = Object
                  .values(errors)
                  .map(function (fieldValues) {
                      return fieldValues.join(', ')
                  })
                  .join("\n");

              alert(errorMessage);
          }
      }, false);
  </script>
    </body>
</html>