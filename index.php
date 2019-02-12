<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.autoparts.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 07:31:18 GMT -->
<head>
		<title>Used Auto Parts, Used Engines, Transmissions | AutoParts.com | Parts</title>
		<base >
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
		<meta name="description" content="Auto Parts is your source for top-quality, used auto parts, including used engines, transmissions, auto body parts, and more.">
		<meta name="keywords" content="used parts, used auto parts, used engines, used engine parts, used transmissions, used transmission parts, used car parts, used automobile parts, used auto body parts, used autoparts, auto parts used, auto parts, auto parts cost, car parts, car parts used, used oem car parts, Auto Parts, quality parts, junk yard, junk yards, junk yard parts">
		<meta name="author" content="Auto Parts">
		<meta name="robots" content="index,follow">		
		<meta name="og:title" property="og:title" content=" "/>
		<meta name="og:keywords" property="og:title" content=" "/>
		<meta name="og:description" property="og:title" content=" "/>
		<meta property="og:type" content="website"/>
		<meta property="og:image" content="images/9112018.jpg" />
		<meta name="og_site_name" property="og:site_name" content="autoparts.com"/>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<!-- animate css -->
		<link href="css/animate.css" rel="stylesheet">
		<!-- slick css -->
		<link rel="stylesheet" type="text/css" href="slick/slick.css">
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
		<!-- fontawesome css -->
		<link href="fontawesome/css/all.css" rel="stylesheet">
		<link href="font/flaticon.css" rel="stylesheet">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<!-- Favicons -->
		<link rel="icon" href="favicon.ico">	
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120708795-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-120708795-1');

		  function myFunction(e) {
		        var xmlhttp = new XMLHttpRequest();
		        if (e.currentTarget.id == "maker") {
		            xmlhttp.onreadystatechange = function() {
		                if (this.readyState == 4 && this.status == 200) {
		                  document.getElementById("model").innerHTML = this.responseText;
		                }
		            };
		        } else if (e.currentTarget.id == "model") {
		          xmlhttp.onreadystatechange = function() {
		                if (this.readyState == 4 && this.status == 200) {
		                  document.getElementById("part").innerHTML = this.responseText;
		                }
		            };
		        } else if (e.currentTarget.id == "part")  {
		          xmlhttp.onreadystatechange = function() {
		                if (this.readyState == 4 && this.status == 200) {
		                  document.getElementById("year").innerHTML = this.responseText;
		                }
		            };
		        }
		          if (e.currentTarget.id == "maker")
		            xmlhttp.open("GET", "show.php?maker=" + e.target.value, true);
		          else if (e.currentTarget.id == "model") 
		            xmlhttp.open("GET", "show.php?model=" + e.target.value, true);
		          else if (e.currentTarget.id == "part") 
		            xmlhttp.open("GET", "show.php?part=" + e.target.value, true);
		          xmlhttp.send();
	   		}
		</script>	
	</head>
	<body>		<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
			<a class="navbar-brand logodefault" href="index.html"><img src="images/qap-logo.png" alt="Auto Parts" /></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
               
            </ul>
            <ul class="navbar-nav custom-nav">
				<li class="nav-item active home">
					<a class="nav-link" href="index.html">Home</a>
				</li>
				<li class="nav-item aboutus">
					<a class="nav-link" href="aboutus.html">About Us</a>
				</li>
				<li class="nav-item partlist">
					<a class="nav-link" href="partlist.html">Part List</a>
				</li>
				<li class="nav-item partrequest">
					<a class="nav-link" href="partrequest.html">Part Request</a>
				</li>
				<li class="nav-item resources">
					<a class="nav-link" href="resources.html">Resources</a>
				</li>
				<li class="nav-item customerservice">
					<a class="nav-link" href="customerservice.html">Customer Service</a>
				</li>
			</ul>
		</div>
	</nav>
 	<section class="homebanner layer-overlay overlay-dark-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-12 col-sm-12">
					<div class="invisible" style="height:70px">height</div>
				</div>

				<div class="col-12 col-md-5 col-sm-12 divblk">
					<div class="form-block">
						<div class="form-title">
							<div class="form-titleh1">Find A Part Now</div>
						</div>
						<form id="qapform" class="form-custom" >
							<div class="blk">
								<div class="form-group row">
									<img src="images/arrow.png" class="arrowrequired d-block qap_make" alt="Arrow for Required" />
									<label for="qap_make" class="col-2 col-form-label">Make <span class="text-danger">*</span></label>
									<div class="col-10">
										<select name="qap_make" id="maker" oninput="myFunction(event)" class="form-control">
		                                       <option disabled selected>Select Maker</option>
		                                       <?php
		                                          include_once "includes/database.php";

		                                          $sql="SELECT maker_name FROM tbl_car_maker ORDER BY maker_name";
		                                          $result=$conn->query($sql);
		                                          while ($row=$result->fetch_assoc()) {
		                                            echo "<option value=\"".$row['maker_name']."\">".$row['maker_name']."</option>";
		                                          }
		                                        ?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<img src="images/arrow.png" class="arrowrequired d-none qap_model" alt="Arrow for Required" />
									<label for="qap_model" class="col-2 col-form-label">Model <span class="text-danger">*</span></label>
									<div class="col-10">
										<select name="qap_model" id="model" oninput="myFunction(event)" class="form-control">
                                      		<option disabled selected>Select Model</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<img src="images/arrow.png" class="arrowrequired d-none qap_part" alt="Arrow for Required" />
									<label for="qap_part" class="col-2 col-form-label">Part <span class="text-danger">*</span></label>
									<div class="col-10">
										<select name="qap_part" id="part" oninput="myFunction(event)" class="form-control">
											<option disabled selected>Select Part</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<img src="images/arrow.png" class="arrowrequired d-none qap_year" alt="Arrow for Required" />
									<label for="qap_year" class="col-2 col-form-label">Year <span class="text-danger">*</span></label>
									<div class="col-10">
										<select name="qap_year" id="year" class="form-control">
											<option disabled selected>Select Year</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-7 offset-md-5 col-sm-12 text-right">
									<button type="button"  name='find' id='find' class="btn btn-custom">Find My Part Now</button>
								</div>
							</div>
						</form>
					</div>
					<div class="form-banner-contact">
						<h2><a href="tel:1-866-293-3731">1-866-293-3731</a></h2>
						<h3>CALL NOW TO ORDER</h3>
					</div>
				</div>
								<div class="col-12 col-md-5 offset-md-1 col-sm-12">
					<div class="ret wow bounceInLeft">
					<h1 class="h1bannertitle d-none d-md-block d-lg-block">Best Online Marketplace Buy Quality Used Auto Parts</h1>
					<h2 class="h2bannertitle d-none d-md-block d-lg-block">Choose High Quality Recycled OEM Parts</h2>
					</div>
				</div>	
			</div>
		</div>
	</section>
	<section class="homewelcomebanner parallax layer-overlay overlay-blue mdhight">
		<div class="container-fluid">
			<div class="row" data-aos="fade-up" data-aos-duration="600">
				<div class="col-10 offset-1">
					<div class="caption">
						<div class="captionh1" style="color: black;">WELCOME</div>
						<div class="captionh4" style="color: black;">TO OUR STORE!</div>
					</div>
					<div class="content" style="color: black; font-size: 25px">
						<p style="color: black;">Auto Parts is your one-stop shop for replacement high quality used OEM automotive parts and accessories. Since 2002 we have served hundreds of thousands of customers across the world, working hand in hand to find high quality parts for your vehicle.</p>
						<p style="color: black; font-size: 25px;">We are headquartered in Chicago, IL, with suppliers across North America. Our goal is to find you the correct part at an inexpensive price, close to your home or business. We can help you locate those hard-to-find parts. We ship your order directly to your home, business or to your mechanic to help you get back onto the road as rapidly as possible.</p>
					</div>
					<div class="col-md-2 offset-md-5 col-sm-12 mt-5">
						<a class="btn btn-custom" href="aboutus.html">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>		<section class="sectionppdt lineargradient3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 caption mt-3 mb-3">
					<div class="captionh1 text-black">PRODUCTS</div>
					<div class="captionh4 text-black mb-3">MOST POPULAR!</div>
				</div>
				<div class="col-12">
					<div class="responsive slider">
						
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Side-View-Mirror')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/side-view-mirror.png" alt="Side View Mirror" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Side View Mirror Doors</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Transmission')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/transmission.png" alt="Transmission" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Transmission/Transaxle Assembly</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Head-Light')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/head-light.png" alt="Head Light" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Headlamp Assembly</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Tail-Light')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/tail-light.png" alt="Tail Light" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Tail Lamp</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('ABS-System')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/abs-system.png" alt="ABS System" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Anti Lock Brake Parts Brakes</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Engine')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/engine.png" alt="Engine" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Engine Assembly Engine</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Steering-Column')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/steering-column.png" alt="Steering Column" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Steering Column</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Electronic-Control-Module')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/electronic-control-module.png" alt="Electronic Control Module" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Electronic Engine Control Module Electronic Modules</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Spindle-Knuckle-Front')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/spindle-knuckle-front.png" alt="Spindle Knuckle Front" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Spindle/Knuckle - Front</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Rear-Drive-Shaft')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/rear-drive-shaft.png" alt="Rear Drive Shaft" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Drive Shaft - Rear Axle</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Speedometer-Cluster')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/speedometer-cluster.png" alt="Speedometer Cluster" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Speedometer Head /Cluster Cowl</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Wheel')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/wheel.png" alt="Wheel" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Wheel Wheel Manual</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Temperature-Control-Module')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/temperature-control-module.png" alt="Temperature Control Module" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Temperature Control Cowl</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Cylinder-Head')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/cylinder-head.png" alt="Cylinder Head" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Cylinder Head Engine</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
						<div>
							<div class="col-md-12 col-sm-12 pdtdiv cursor" onclick="redirect('Strut')" >
								<div class="popularpdt">
									<div class="popularpdt-image">
										<img src="images/parts/noimages.png" alt="Strut" />
									</div>
									<div class="popularpdt-content">
										<div class="pdtname">Strut</div>					
																				
									</div>
								</div>
							</div>
						</div>	
						 
				  </div>
			  </div>
				
			</div>
		</div>
	</section>	<section class="ourservicebanner parallax layer-overlay overlay-dark-8 mdhight">
		<div class="container-fluid">
			<div class="row">
				<div class="col-10 offset-1">
					<div class="caption">
						<div class="captionh1">SERVICES</div>
						<div class="captionh4">MILLIONS OF QUALITY USED OEM PARTS</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 at wow fadeInLeft">
					<div class="col-3 float-left">
						<div class="rounddiv wow rollIn ">
							<i class="fas fa-hand-holding-usd"></i>
						</div>
					</div>
					<div class="col-8 rounddiv rounddivtext float-left">
						<div class="rounddivtexth1">Quick Quotes that save you money</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 at wow fadeInLeft">
					<div class="col-3 float-left">
						<div class="rounddiv wow rollIn ">
							<i class="fas fa-percent"></i>
						</div>
					</div>
					<div class="col-8 rounddiv rounddivtext float-left">
						<div class="rounddivtexth1">Save over 50% off dealer prices</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 at wow fadeInLeft">
					<div class="col-3 float-left">
						<div class="rounddiv wow rollIn ">
							<i class="fas fa-truck"></i>
						</div>
					</div>
					<div class="col-8 rounddiv rounddivtext float-left">
						<div class="rounddivtexth1">Fast delivery to your home or mechanic</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 at wow fadeInLeft">
					<div class="col-3 float-left">
						<div class="rounddiv wow rollIn ">
							<i class="fas fa-car"></i>
						</div>
					</div>
					<div class="col-8 rounddiv rounddivtext float-left">
						<div class="rounddivtexth1">home or mechanic We service all major makes</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 	<section class="testimonialdiv lineargradient1 testimonial">
		<div class="container">
			<div class="row">

           <!-- Grid row-->
            <div class="row">
                <div class="col-md-6">
                    <!-- Testimonial Slider from Baamboo Studio modified for The Mentor Group (http://www.mentor-group.com/clients--testimonials.html) -->

                    <!-- TestimonialS Slider - Free Weebly Widget by Baamboo Studio - Style 2 -->
                    <div class="testimonial_slider_2">
                        <input type="radio" name="slider_2" id="slide_2_1" checked />
                        <input type="radio" name="slider_2" id="slide_2_2" />
                        <input type="radio" name="slider_2" id="slide_2_3" />
                        <input type="radio" name="slider_2" id="slide_2_4" />
                        <div class="boo_inner clearfix">
                            <div class="slide_content">
                                <div class="testimonial_2">
                                    <div class="content_2">
                                        <h5 class="text-white">Client testimonials</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
                                    </div>
                                    <div class="author_2">
                                        <h3>Daniel Frank, Seo Master</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_content">
                                <div class="testimonial_2">
                                    <div class="content_2">
                                        <h5 class="text-white">Client testimonials</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
                                    </div>
                                    <div class="author_2">
                                        <h3>Leah Jordan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_content">
                                <div class="testimonial_2">
                                    <div class="content_2">
                                        <h5 class="text-white">Client testimonials</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
                                    </div>
                                    <div class="author_2">
                                        <h3>Brian McNaught</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_content">
                                <div class="testimonial_2">
                                    <div class="content_2">
                                        <h5 class="text-white">Client testimonials</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typeseto f and typesetting industry. to the Lorem Ipsum has been the industry's printer a galley</p>
                                    </div>
                                    <div class="author_2">
                                        <h3>Lee Barker</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="controls">
                            <label for="slide_2_1"></label>
                            <label for="slide_2_2"></label>
                            <label for="slide_2_3"></label>
                            <label for="slide_2_4"></label>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <h5 class="text-white">Some of our Clients</h5>
                    <div class="row">
                        <div class="col-md-4 col-4"><img src="images/client-logo-1.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="images/client-logo-2.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="images/client-logo-3.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="images/client-logo-6.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="images/client-logo-4.jpg" class="img-fluid" alt=""></div>
                        <div class="col-md-4 col-4"><img src="images/client-logo-5.jpg" class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
            <!--/. Grid row-->
        </div>
        <!-- /. Container -->
    </section>



<section class="partnersdiv">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
				   <div class="regular slider">
						<div>
							<div class="item">
								<img src="images/partnerslogos/acura.jpg" alt="ACURA" />
							</div>
						</div>
						<div>
							<div class="item">
								<img src="images/partnerslogos/alfa-romeo.png" alt="ALFA-ROMEO" />
							</div>
						</div>
						<div>
							<div class="item">
								<img src="images/partnerslogos/AMC.jpg" alt="AMC" />
							</div>
						</div>
						<div>
							<div class="item">
								<img src="images/partnerslogos/audi.png" alt="AUDI" />
							</div>
						</div>
						<div>
							<div class="item">
								<img src="images/partnerslogos/BMW.png" alt="BMW" />
							</div>
						</div>
						<div>
							<div class="item">
								<img src="images/partnerslogos/British-Leyland.png" alt="BRITISH-LEYLAND" />
							</div>
						</div>
						<div>
							<div class="item">
								<img src="images/partnerslogos/Cooper.png" alt="COOPER" />
							</div>
						</div>
				   </div>
				</div>
			</div>
		</div>
	</section>
<section class="footerdiv">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-12 infooter">
					<h4>Part Request</h4>
					<ul>
						<li><a href="partrequest.html">Find A Part</a></li>
						<li><a href="carsearchmakes/car-make.html">Search By Car Make</a></li>
						<li><a href="carsearchmakes/part-type.html">Search By Part Type</a></li>
						<li><a href="sitemap.html">Sitemap	</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-12 infooter">
					<h4>Customer Service</h4>
					<ul>
						<li><a href="customerservice.html">Submit A Ticket</a></li>
						<li><a href="warranty.html">Warranty Policy</a></li>
						<li><a href="contactus.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-12 infooter">
					<h4>Resources</h4>
					<ul>
						<li><a href="resources.html">Articles</a></li>
						<li><a href="reviews.html">Testimonials</a></li>
						<li><a href="importantlinks.html">Important Links</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-12 infooter">
					<h4>About Us</h4>
					<ul>
						<li><a href="aboutus.html">Why AP?</a></li>
						<li><a href="privacypolicy.html">Privacy Policy</a></li>
						<li><a href="termsandconditions.html">Terms and Conditions</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="footercopyrightdiv">
		<div class="container-fluid">
			<div class="row">
				<div class="copyrighttext m-auto"><p>Copyright © <script type="text/javascript">document.write(new Date().getFullYear());</script>. AutoParts.com. All Rights Reserved</p></div>
			</div>
		</div>
	</section>
		<!-- Bootstrap core JS -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.js"></script>
		<script src="js/main.js"></script>
		<!-- Include Slick Slider -->
		<script src="slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script></pre>
		<script type="text/javascript">
			new WOW().init();
			$(document).ready(function() {
				
				$(".regular").slick({
					dots: false,
					prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fa fa-chevron-left"></i></button>',
					nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fa fa-chevron-right"></i></button>',
					speed: 300,
					infinite: true,
					autoplay: true,
					slidesToShow: 6,
					slidesToScroll: 1,
					 responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 5,
						slidesToScroll: 3,
						infinite: true,
						dots: false
					  }
					},
					{
					  breakpoint: 600,
					  settings: {
						slidesToShow: 4,
						slidesToScroll: 2
					  }
					},
					{
					  breakpoint: 480,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				  ]
				});
				$('.responsive').slick({
				  dots: false,
				  infinite: true,
				  speed: 300,
				  autoplay: true,
				  arrows:false,
				  slidesToShow: 4,
				  slidesToScroll: 1,
				  responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						infinite: true,
						dots: false
					  }
					},
					{
					  breakpoint: 600,
					  settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					  }
					},
					{
					  breakpoint: 480,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				  ]
				});
			});  
		</script>
	</body>
</html>