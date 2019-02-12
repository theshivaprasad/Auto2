<?php
	include_once "includes/database.php";
	function extractId($conn, $node, $item) {
		$sql = "SELECT ".$node."_id FROM tbl_car_".$node." WHERE ".$node."_name=\"".$item."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				$row = $result->fetch_assoc();
				return $row[$node.'_id'];
			}
			else {
				return 0;
			}
		}
	}
    if (isset($_GET["part"])) {
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Service-Company-Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Montserrat:100,100i,200,200i,300,300i,400,400i,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
  <style type="text/css">
.mbutton {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 8px 125px;
  cursor: pointer;
}
.mimg {
  
  border-radius: 4px;
  padding: 5px;
  width: 250px;
}
.mimg img:hover{
    transform: scale(1.1,1.1);
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
  function ani(){
    document.getElementById('img').className ='controls-next-html';
  }
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
			        	document.getElementById("year").innerHTML = this.responseText;
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
	    	xmlhttp.open("GET", "show.php?part=" + e.target.value, true);
	    else if (e.currentTarget.id == "part") 
	    	xmlhttp.open("GET", "show.php?part=" + e.target.value, true);
	    xmlhttp.send();
	}
</script>

</head>
    
<body>
   
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="gradient"></div>
        <!-- Container -->
        <div class="container">
            <div class="social-container">
    <ul class="social-icons">
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    </ul>
</div>
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span><i class="fa fa-align-right" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Customer Services</a>
                    </li>
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="partlist.html"style="color: #00FFFF">Parts List</a>
                    </li>
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Part Request</a>
                    </li>
                    <li class="hidden">/</li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Contact</a>
                    </li>
                    <li class="hidden"></li>
                    <li class="nav-item">
                       <button class="butt">Get Quote</button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /. Container -->
    </nav>
    <!-- Banner-Section -->
    <section class="bannerpl">
        <div class="container h-100 d-flex">

                  <div class="mimg" style="float:left; padding-top:200px; padding-right:40px;" data-aos="zoom-in-up" data-aos-duration="1000">
        
          <img src="images/blog.png" alt="Lights"height="400" width="500">
          
        </div>

        <!-- Container -->
        
            <div class="jumbotron my-auto ml-auto" data-aos="fade-right" data-aos-duration="600">
                <h1>Need Boost For Your Auto?</h1>
                <h2 class="lead">Fill in the form to get a free quote for your auto parts</h2>
                <!-- Grid row-->
        <div class="row">
                    <div class="col-md-12">
                        <form>
                           
                            <div class="form-group row">
                                <div class="col-sm-8 selectdiv">
                                   <select name="" id="maker" oninput="myFunction(event)">
										<option disabled selected>Maker</option>
										<?php
											$sql="SELECT DISTINCT m.maker_name as maker FROM tbl_car_maker m, tbl_car_model mo, tbl_inventory i WHERE m.maker_id=mo.maker_id AND mo.model_id=i.model_id AND i.part_id=\"".extractId($conn,"part",$_GET['part'])."\"";
											$result=$conn->query($sql);
											while ($row=$result->fetch_assoc()) {
												echo "<option value=\"".$row['maker']."\">".$row['maker']."</option>";
											}
										?>
									</select>
                                </div>
                                <div class="col-sm-8 selectdiv">
                                   <select name="" id="model" oninput="myFunction(event)">
										<option disabled selected>Model</option>
									</select>
                                </div>
                                <div class="col-sm-8 selectdiv">
                                   <select name="" id="part" oninput="myFunction(event)">
										<option disabled >Parts</option>
										<?php
											$sql="SELECT part_name as part FROM tbl_car_part ORDER BY part_name";
											$result=$conn->query($sql);
											while ($row=$result->fetch_assoc()) {
												if ($row["part"]==$_GET["part"]) {
													echo "<option selected value=\"".$row['part']."\">".$row['part']."</option>";
												} else {
													echo "<option value=\"".$row['part']."\">".$row['part']."</option>";
												}
											}
										?>
									</select>
                                </div>
                                 <div class="col-sm-8 selectdiv">
                                   <select name="" id="year" oninput="myFunction(event)">
										<option disabled selected>Year</option>
									<select>
                                </div>
                            </div> 
                                            
                            <button type="submit" class="mbutton">Get Quote</button>
                            
                        </form>
                    </div>
                </div>
                <!--/. Grid row-->
            </div>
        </div>
</section>
       <br/>
       <section>
        <div class="container">
        <div class="col-md-12 col-sm-12">
          <div class="reelative"><h2 class="subtitle">Lorem Ipsum</h2></div>
          <div class="makecontent">
            <p><p><strong>Lorem Ipsum</strong></p>
            <?php
              if ($fh = fopen('lorem.txt','r')) {
                echo "<p>";
                while (!feof($fh)) {
                  $s = fgets($fh);
                  if (("\n" == $s) || ("\r\n" == $s)) {
                    echo "</p><p>";
                  }
                  echo "$s";
                }
              }
            ?>
          </div>
        </div>
      </div>
       </section>  

<!--/. Grid row-->


    <!-- Testimonial-Section -->
    <section class="testimonial">
        <div class="gradient"></div>
        <!-- Container -->
        <div class="container">
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
                                        <h4>Client testimonials</h4>
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
                                        <h4>Client testimonials</h4>
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
                                        <h4>Client testimonials</h4>
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
                                        <h4>Client testimonials</h4>
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
                    <h4>Some of our clients</h4>
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

    <!-- Blog-Section -->

    <!-- Footer -->
 <footer class="page-footer">
        <div class="gradient"></div>
        <!-- Footer Links -->
        <!-- Container -->
        <div class="container">
              <div class="container">
            <!-- Grid row-->
                <!-- Grid column -->
                <div class="row">
                <div class="col-md-2 col-sm-6">
                    <ul>
                      <li><b>About Us</b> <br/> <a href="index.html">Why BIZZE ?</a><br/>
                      <a href="index.html">Terms and Conditions</a><br/>
                    <a href="index.html">Privacy Policy</a></li>
                  </ul>
                </div>
                <div class="col-md-2 col-sm-6">
                    <ul>
                      <li><b>Customer Services </b><br/> <a href="index.html">Submit a ticket</a><br/>
                      <a href="index.html">Warranty Policy</a><br/>
                    <a href="index.html">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-2 col-sm-6">
                    <ul>
                      <li><b>Part Request </b><br/> <a href="index.html">Find a Part</a><br/>
                      <a href="index.html">Search by car Make</a><br/>
                    <a href="index.html">Search by car part type</a><br/>
                                      <a href="index.html">Sitemap</a></li>
                  </ul>
                </div>
                <div class="col-md-2 col-sm-6">
                    <ul>
                      <li><b>Resources </b><br/> <a href="index.html">Blog</a><br/>
                      <a href="index.html">Testimonials</a><br/>
                    <a href="index.html">Links</a></li>
                  </ul>
                </div>
                <div class="col-md-2 col-sm-6">
                <!-- Copyright -->
                <div class="footer-copyright">
                    <p>© 2018, All Rights Reserved. Designed by
                        <a href="http://www.iugale.com/" target="_blank"> IUGALE</a></p>
                </div>
          <a href="index.html"><img src="images/logo.png" alt="footer-logo"></a><br/>
    <ul class="social-icons">
        <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
    </ul>
                </div>
              </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

            <!-- Footer Links -->

            <!-- Grid row-->
        </div>
        <!-- /. Container -->
    </footer>
    <!-- Footer -->


    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
<?php
    } else {
        header("Location: partlist.php");
    }
?>
