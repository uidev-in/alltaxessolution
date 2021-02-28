<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });
    
	
}); // jquery end
</script>

<style type="text/css">
	.col-megamenu .list-unstyled li a i {
     margin-left: 0px!important; 
	margin-right: 5px;	
    font-size: 10px;
	color:#ff7364;	
}
	@media all and (min-width: 992px) {
		.navbar{ padding-top: 0; padding-bottom: 0; }
		.navbar .has-megamenu{position:static!important;}
		.navbar .megamenu{left:0; right:0; width:100%; padding:20px;  }
		.navbar .nav-link{ padding-top:1rem; padding-bottom:1rem;  }
		.col-megamenu h6{font-size: 0.85rem}
		.col-megamenu .list-unstyled li{ display: block!important;}
		.col-megamenu ul li a{    font-size: 12px!important;font-weight: 400!important;  padding: 0!important;}
	}
</style>

<!-- Header -->
<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone"></i>Phone: +91-8700664310</div> 
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: contact@alltaxessolution.com</div>	
								<!-- <div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 09AM - 06PM</div>  -->
							</div>
							<!-- End Top Contact -->
						</div>	
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>															
								<div class="button">
									<a href="contact.php" class="bizwheel-btn">Get a Quote</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="index.php">
													<img src="img/ats-logo.png" alt="#">
												</a>
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="index.php">Home</a></li>
																<li><a href="about_us.php">About Us</a></li>
																<li class="nav-item dropdown has-megamenu show">
																	<a href="" class="nav-link dropdown-toggle"  data-toggle="dropdown" aria-expanded="true">Services</a>
																	<div class="dropdown-menu megamenu " role="menu">
																		<div class="row">
																			<div class="col-md-3">
																				<div class="col-megamenu mb-2">
																					<h6 class="title">Food Licence</h6>
																					<ul class="list-unstyled">
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>FSSAI License</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Drug License</a></li>
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																				<div class="col-megamenu">
																					<h6 class="title">License (IEC)</h6>
																					<ul class="list-unstyled">
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Trade License</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Import Export Code Registration</a></li>
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																			</div><!-- end col-3 -->
																			<div class="col-md-3">
																				<div class="col-megamenu">
																				<h6 class="title">Popular Entity Registration</h6>
																					<ul class="list-unstyled">
																						<li><a href="#">LLP (Limited Liability Partnership)</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Private Limited Company</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Partnership Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Proprietorship Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Public Company Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>OPC Company Registration</a></li>
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																			</div><!-- end col-3 -->
																			<div class="col-md-3">
																				<div class="col-megamenu">
																				<h6 class="title">Special Entity Registration</h6>
																					<ul class="list-unstyled">
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>MSME/SSI Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Section 8 Company</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Nidhi Company Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Trust Registration</a></li>
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																			</div>    
																			<div class="col-md-3">
																				<div class="col-megamenu">
																				<h6 class="title">Other Registration</h6>
																					<ul class="list-unstyled">
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>DSC Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>ESI Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>EPF Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>TAN Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Professional Tax Registration</a></li>
																						<!--<li><a href="#">Custom Menu</a></li>-->
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																			</div><!-- end col-3 -->
																		</div><!-- end row --> 
																	</div>
																</li>
																<li class="nav-item dropdown has-megamenu show">
																	<a href="" class="nav-link dropdown-toggle"  data-toggle="dropdown" aria-expanded="true">Tax</a>
																	<div class="dropdown-menu megamenu " role="menu">
																		<div class="row">
																			<div class="col-md-3">
																				<div class="col-megamenu">
																					<h6 class="title">GST</h6>
																					<ul class="list-unstyled">
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>GST Registration</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>GST Return</a></li>
																						<!--<li><a href="#">Sub Services</a></li>-->
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																			</div><!-- end col-3 -->
																			<div class="col-md-3">
																				<div class="col-megamenu">
																				<h6 class="title">INCOME Tax</h6>
																					<ul class="list-unstyled">
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Income Tax Filling</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Business Return Filling</a></li>
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																			</div><!-- end col-3 -->
																			<div class="col-md-3">
																				<div class="col-megamenu">
																				<h6 class="title">TDS</h6>
																					<ul class="list-unstyled">
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>TDS Return Filling</a></li>
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																			</div>    
																			<div class="col-md-3">
																				<div class="col-megamenu">
																				<h6 class="title">Compliances</h6>
																					<ul class="list-unstyled">
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Accounting Bookkeeping</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>ROC Compliances</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>Company Annual Filling</a></li>
																						<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i>LLP Annual Filling</a></li>
																					</ul>
																				</div>  <!-- col-megamenu.// -->
																			</div><!-- end col-3 -->
																		</div><!-- end row --> 
																	</div>
																</li>
																
																<!-- <li class="icon-active"><a href="#">Services</a>
																	<ul class="sub-menu">
																		<li><a href="#">Company Registeration</a></li>
																		<li><a href="#">ITR Return</a></li>
																	</ul>
																</li> -->
																<li><a href="contact.php">Contact Us</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">
					<h4>About Bizwheel</h4>
					<p>The main component of a healthy environment for self esteem is that it needs be nurturing. It should provide unconditional warmth.</p>
					<!-- Social Icons -->
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="single-content">
					<h4>Important Links</h4>   
					<ul class="links">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Pricing Plan</a></li>
						<li><a href="#">Blog & News</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>	
			</div>
			<!--/ Sidebar Popup -->	
		</header>
		<!--/ End Header -->