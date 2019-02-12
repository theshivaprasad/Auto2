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
        <title>Used Amc Parts - Buy Used Amc OEM Parts Online @ Best Price</title>
        <base >
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
        <meta name="description" content="Amc Parts - autoparts.com offers used  Amc OEM parts online at affordable prices. We have a huge inventory of Amc parts to serve your requirement. Shop from our large selection of Used Amc parts now. Great Value For Money. Easy Returns.">
        <meta name="keywords" content="Used amc parts, amc parts, buy amc parts, online amc parts, used amc parts, buy, online, shop, best.">
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
    <body>      <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
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
    <section class="cstbanner layer-overlay overlay-dark-0 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="invisible invisiblex">height</div>
                </div>
                

                <!--#partimagetrow-->
                <div class="col-md-6 col-sm-12">
                    <div class="col-md-12 pagedetailh1in"><h1>USED <span class="text-blue fnt-big">Amg Ambassador Ac Compressor</span> OEM PARTS.</h1></div><div class="subbannerproduct cstbanner2"><img src="images/parts/ac-compressor.png" alt="Air Conditioner Compressor" ></div>
                    
                </div>
                <!--partimagetrow#-->




                <div class="col-md-6 col-sm-12 divblk">
                    <div class="form-block">
                        <div class="form-title">
                            <div class="form-titleh1">Find A Part Now</div>
                        </div>
                        <form id="qapform" class="form-custom" action="final.html">
                            <div class="form-group row">
                                <img src="images/arrow.png" class="arrowrequired d-none qap_make" alt="Arrow for Required" />
                                <label for="make" class="col-2 col-form-label">Make <span class="text-danger">*</span></label>
                                <div class="col-10">
                                    <select name="qap_make" id="maker" oninput="myFunction(event)" class="form-control" required>
                                        <option disabled selected value="">Select Maker</option>
                                        <?php
                                            $sql="SELECT DISTINCT m.maker_name as maker FROM tbl_car_maker m, tbl_car_model mo, tbl_inventory i WHERE m.maker_id=mo.maker_id AND mo.model_id=i.model_id AND i.part_id=\"".extractId($conn,"part",$_GET['part'])."\"";
                                            $result=$conn->query($sql);
                                            while ($row=$result->fetch_assoc()) {
                                                echo "<option value=\"".$row['maker']."\">".$row['maker']."</option>";
                                            }
                                        ?>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <img src="images/arrow.png" class="arrowrequired d-none qap_model" alt="Arrow for Required" />
                                <label for="modelid" class="col-2 col-form-label">Model <span class="text-danger">*</span></label>
                                <div class="col-10">
                                    <select name="qap_model" id="model" oninput="myFunction(event)" class="form-control" required>
                                        <option disabled selected value="">Select Model</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <img src="images/arrow.png" class="arrowrequired d-none qap_part" alt="Arrow for Required" />
                                <label for="partid" class="col-2 col-form-label">Part <span class="text-danger">*</span></label>
                                <div class="col-10">
                                    <select name="qap_part" id="part" oninput="myFunction(event)" class="form-control" >
                                        <option disabled >Select Part</option>
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
                            </div>
                            <div class="form-group row">
                                <img src="images/arrow.png" class="arrowrequired d-block qap_year" alt="Arrow for Required" />
                                <label for="yearid" class="col-2 col-form-label">Year <span class="text-danger">*</span></label>
                                <div class="col-10">
                                    <select name="qap_year" id="year" oninput="myFunction(event)" autofocus  class="form-control" required>
                                        <option disabled selected>Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 offset-md-5 col-sm-12">
                                    <button type="submit" id='find' class="btn btn-custom">Find My Part Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class=" mt-5 mb-5">
        <div class="container">
            <div class="row">
                <!--#descriptiontrow-->
                <div class="col-md-12 col-sm-12">
                    <div class="reelative"><div class="subtitle">Lorem Ipsum</div></div>
                    <div class="makecontent">
                        <p><u><b>Lorem Ipsum</b></u></p>
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
        </div>
    </section>
        <section class="bgblue contactdivft">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="ctnumb">
                        <div class="ctnumbh1">FIND YOUR ORDERS?</div>
                        <h2><a href="tel:1-866-293-3731">1-866-293-3731</a></h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-9">
                <a class="btn btn-custom mt-4 d-none " href='partrequest.html' >Find My Part Now</a>
                </div>
            </div>
        </div>
    </section>      <section class="testimonialdiv lineargradient1 testimonial">
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
                        <li><a href="sitemap.html">Sitemap  </a></li>
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
<script type="text/javascript">

var option = '';

$('document').ready(function(){

    var activeheader = 'partlist';
    $('.nav-item').removeClass('active');
    $('.'+activeheader).addClass('active');

    if(option == 'car-make'){

        $('html, body').animate({
        'scrollTop' : $("#makes").position().top
        });

    }
    if(option == 'part-type'){

        $('html, body').animate({
        'scrollTop' : $("#models").position().top
        });
    }
    
})
</script>

      <?php
    } else {
        header("Location: partlist.php");
    }
?>
