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
        <title>GST REGISTERATION | All Taxes Solution</title>
        
		<?php include 'include/head.php';?>
		
		<style>


/*Fun begins*/
.tab_container {
	width: 90%;
	margin: 0 auto;
	padding-top: 70px;
	position: relative;
}

input, section {
  clear: both;
  padding-top: 10px;
  display: none;
}

label {
  font-weight: 700;
  font-size: 18px;
  display: block;
  float: left;
  width: 20%;
  padding: 1.5em;
  color: #ffffff;
  cursor: pointer;
  text-decoration: none;
  text-align: center;
  background: #3639a4;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5 {
  display: block;
  padding: 20px;
  background: #fff;
  color: #999;
  border-bottom: 2px solid #f0f0f0;
}

.tab_container .tab-content p,
.tab_container .tab-content h3 {
  -webkit-animation: fadeInScale 0.7s ease-in-out;
  -moz-animation: fadeInScale 0.7s ease-in-out;
  animation: fadeInScale 0.7s ease-in-out;
}
.tab_container .tab-content h3  {
  text-align: center;
}

.tab_container [id^="tab"]:checked + label {
	background: #ff7364;
    box-shadow: inset 0 3px #3639a4;
}

.tab_container [id^="tab"]:checked + label .fa {
  color: #fff;
}

label .fa {
  font-size: 1.3em;
  margin: 0 0.4em 0 0;
}

/*Media query*/
@media only screen and (max-width: 930px) {
  label span {
    font-size: 14px;
  }
  label .fa {
    font-size: 14px;
  }
}

@media only screen and (max-width: 768px) {
  label span {
    display: none;
  }

  label .fa {
    font-size: 16px;
  }

  .tab_container {
    width: 98%;
  }
}

/*Content Animation*/
@keyframes fadeInScale {
  0% {
  	transform: scale(0.9);
  	opacity: 0;
  }
  
  100% {
  	transform: scale(1);
  	opacity: 1;
  }
}

		</style>
		
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
									<li><a href="services.php">Services</a></li>
									<li><a href="#">Gst Registration</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>GST REGISTERATION</h2></div>
						</div>
					</div>
				</div>
			</div>
        </div>
        
	
<!-- GST REGISTERATION Services-->

<div class="tab_container">
			<input id="tab1" type="radio" name="tabs" checked>
			<label for="tab1"><i class="fa fa-search"></i><span>Overview</span></label>

			<input id="tab2" type="radio" name="tabs">
			<label for="tab2"><i class="fa fa-star"></i><span>Feature</span></label>

			<input id="tab3" type="radio" name="tabs">
			<label for="tab3"><i class="fa fa-check-square-o"></i><span>Eligibility</span></label>

			<input id="tab4" type="radio" name="tabs">
			<label for="tab4"><i class="fa fa-file-text-o"></i><span>Documentation</span></label>

			<input id="tab5" type="radio" name="tabs">
			<label for="tab5"><i class="fa fa-download"></i><span>Download</span></label>

			<section id="content1" class="tab-content">
				<h3>About GST REGISTRATION</h3>
		      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		      	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		      	
			</section>

			<section id="content2" class="tab-content">
				<h3>Headline 2</h3>
		      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		      
			</section>

			<section id="content3" class="tab-content">
				<h3>Eligibility Criteria for GST REGISTRATION</h3>
		      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		      	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    
			</section>

			<section id="content4" class="tab-content">
				<h3>Documentation</h3>
		      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      	tempor incididunt ut labore et dolore magna aliqua.</p>
		      	
			</section>

			<section id="content5" class="tab-content">
				<h3>Headline 5</h3>
		      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
		      	
			</section>
		</div>           


<!--/ End GST REGISTERATION Services -->

		
<br><br><br><br><br><br>



    <?php include 'include/footer.php';?>
		<?php include 'include/script.php';?>
    </body>
</html>