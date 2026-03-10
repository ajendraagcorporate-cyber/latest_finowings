<?php
include("../../DLL/config.php");
include("../../DLL/functions.php");
//$id = $_REQUEST['i'];
$id = 2;
$course = getCourse($id);
$title = $course['course_title'];
$sale_p = $course['sale_p'];
$price = $course['price'];
$languages = $course['languages'];
$rating_numbers = $course['rating_numbers'];
$classplus_link = $course['classplus_link'];
$descr = $course['descr'];
$course_content = $course['course_content'];
$howtouse = $course['howtouse'];
$img = $course['img'];
$timer = "Aug 10, 2022 21:00:00";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Course Details | Finowings Training Academy Private Limited</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
	
	<!--Bootstrap code-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!--Bootstrap code-->

    <!-- Bootstrap CSS -->
 
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
	
	<script src="../../js/submit.js"></script>
	
<style type="text/css">
/* Make the image fully responsive */
.owl-carousel img{width: 100%; height: 100%;}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}  

.carousel-indicators li {
  background-color: #00000 !important;
}

.carousel-indicators .active {
  background-color: #00000 !important;
}
</style>

<style type="text/css">

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #139dd7; color:#FFFFFF;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #139dd7;  color:#FFFFFF;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.profile-circle{width:40px; height:40px; border-radius:50%; background:#106a9d; color:#FFFFFF; line-height:40px; text-align:center; font-size:20px; float:left;}

.profile-icon-box{width:10%; height:auto; float:left;}
.profile-detail-box{width:90%; height:auto; float:left;}


.review-box{width:100%; margin:0 auto; border:1px solid #c9c9c9; padding:20px;}

</style>
  
	
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
   <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-4">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="../../img/finowings-logo.png" />
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="../../about-finowings/" class="nav-item nav-link">About Us</a>
				<a href="../../finowings-academy/" class="nav-item nav-link">Finowings Academy</a>
                <a href="../../technical-analysis-courses/" class="nav-item nav-link active">Courses</a>
                <!--<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>-->
				<a href="../../blog/" class="nav-item nav-link">Blog</a>
                <a href="../../contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="../../demat-accounts.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Open Demat Account<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Navbar Ends -->

 <!-- Header Start -->
    <!-- <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Course Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Course Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<div class="container-xxl py-3 pt-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
	
	<!--Course box start-->

<div class="row">

<div class="col-lg-5 col-md-5 col-sm-6 col-12 pt-2"><img src="../../admin/media/courseicons/<?php echo $img; ?>" class="img-fluid mx-auto d-block"></div>



<div class="col-lg- col-md-4 col-sm-6 col-12 pt-2">
<h3 style="color: #406ab2;"><?php echo $title; ?></h3>
<p><i class="fas fa-star" style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <font style="font-size:14px;">(<?php echo $rating_numbers; ?>)</font></p>

<font style="padding-top:22px; font-size:16px;">Instructor: <span style="color: #406ab2;">Mukul Agrawal</span></font><br>
<font style="padding-top:22px; font-size:16px;">Language: <span style="color: #406ab2;"><?php echo $languages; ?></span></font><br><br>
<font style="padding-top:22   px; font-size:24px; color: #406ab2;">&#x20B9; <?php echo $sale_p; ?></font>&nbsp;&nbsp;<font style="padding-top:20px; font-size:18px; color: red;"><del>&#x20B9; <?php echo $price; ?></del></font>&nbsp;&nbsp;<font style="font-size: 14px;">&nbsp;(including 18% GST)</font>

<!--<div style="padding-top:20px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#139dd7; border:1px solid ##139dd7;">
Buy Now</button></div>-->

<div style="padding-top:20px; padding-bottom:20px;"> <a class="btn btn-primary py-3 px-5 mt-2 mb-2" href="https://dhqpe.courses.store/222886?quick-pay=true" target="_blank">Join Now</a></div>

</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-12" style="background:#e9f9ff;">
<h3 align="center" style="color: #406ab2; padding-top:15px">Upcoming Batch</h3>
<div align="center" style="font-size:24px; font-weight:600; background: #00abe9; color:#FFFFFF;"><p id="demo"></p></div>

<h5 style="padding-top:10px; padding-left:10px;">Special Offers</h5>
<div style="padding-top:10px; padding-left:10px; font-size:17px;"><img src="../../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">3 Months Hand-Holding Support</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px;"><img src="../../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Screener Strategy</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px; padding-bottom:30px;"><img src="../../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Per Day 2 Stocks</a> <br></div>


<div align="center"><a class="btn btn-primary py-3 px-5" href="<?php echo $classplus_link; ?>" target="_blank">Enroll Now</a></div>

</div>



</div>
<!--Course box end-->



<!--Pop Up box start-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><img src="images/cart-icon.jpg"> Cart (1 Items )</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body start -->
        <div class="modal-body">
        
          <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-6"><h6>ITEM DETAILS</h6></div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-6"><h6>PRICE	</h6></div>
          </div>
          
          <hr>
         
          <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-12">
          <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-6"><img src="images/online-webinar-small.jpg" class="img-fluid mx-auto d-block"></div>
          <div class="col-lg-9 col-md-9 col-sm-6 col-6">Basics of Stock Market (For Android & iOS) <br>BOSM2.0 | Till 365 days</div>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12 ml-auto"><h6>₹4,999 <br>incl. 18% GST</h6></div>
          </div>
          
          <hr>
          
          <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-12"><h6>Note: Promo Codes can be applied after checkout</h6></div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12"><h6>Total Amount ₹4999.00</h6></div>
          </div>
          
          <hr>
          
          <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-6"><h6><a href="#" style="text-decoration:none; color:#333333;">Add More</a></h6></div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-6"><a href="#" class="btn btn-info" style="background:#139dd7; color:ffffff;">Checkout</a></div>
          </div>
          
          
        
        </div>
        <!-- Modal body end-->
        
        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
<!--Pop Up box end-->


</div>
</div>

</div>
</div>

<!--Rating and Review section end-->

</div>
</div>






<!--Tabing box start-->
<div class="container mb-4">
<div class="tab mt-4 wow fadeInUp" data-wow-delay="0.1s">
  <button class="tablinks" onClick="openCity(event, 'London')" id="defaultOpen">OVERVIEW</button>
  <!--<button class="tablinks" onClick="openCity(event, 'Paris')">Class Details</button>-->
  <button class="tablinks" onClick="openCity(event, 'Tokyo')">SUPPORT</button>
</div>

<!--Description box start-->
<div id="London" class="tabcontent">
  <!--<h3>Description</h3>-->
 <?php echo $descr; ?>
</div>
<!--Description box end-->



<div id="Paris" class="tabcontent">
  
   <?php echo $course_content; ?>
 </div>

<div id="Tokyo" class="tabcontent">
  <?php echo $howtouse; ?>
</div>
</div>
<!--Tabing box end-->	


        

    <!-- Footer Start -->
    <?php include("footer.php"); ?> 
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/wow/wow.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
	
	<!--Tabing box script start-->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!--Tabing box script end-->


<!-- Countdown Timer Script Starts -->
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $timer; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " Days " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<!-- Countdown Timer Script Ends -->

</body>

</html>

