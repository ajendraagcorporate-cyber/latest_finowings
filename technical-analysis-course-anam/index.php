<?php
include("../DLL/config.php");
include("../DLL/functions.php");
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
$timer = "Oct 25, 2024 21:00:00";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best Stock Market Technical Analysis Course in Lucknow</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Technical Analysis Course, Stock market technical Analysis Class in Lucknow,stock market course,share market course,trading course, trading course in lucknow" name="keywords">
    <meta content=" We provide the Best Stock Market Technical Analysis Course in Lucknow. Learn from experts & start your Stock market journey Today. Enroll Now" name="description">

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
	
	<script src="../js/submit.js"></script>
	
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

  <style type="text/css">
  .pop-up-box{width:100%; height:auto; display:block; background:transparent; text-align:center; margin-top:20%;}
  
  .pop-up-box{width:100%; height:auto; display:block; text-align:center;}
   
  .pop-heading-text{font-family: 'Playfair Display', serif;}
  .pop-sub-itelic{font-family: 'Playfair Display', serif;}
  .pop-sub-normal{font-family: 'Playfair Display', serif;}  
  .personal-font{font-family: 'Poppins', sans-serif;}
   
  </style>  

<style>
.coupon {
  border: 5px dotted #bbb;
  width: 100%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 100%;

}

.container223 {
  padding: 2px 16px;
  
}

.promo {
  background: #cf9c0a;
  padding: 3px;
}

.expire {
  color: #FFCCCB;
}
</style>

<!-- Form Popup CSS Starts -->
 <style>

       .modal-dialog .modal-content {
    text-align: center;
    border: none;
}
.modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
 
}

.modal-content .close {
    color: #000000;
    /* background: #000000; */
    font-size: 25px;
    font-weight: 800;
    text-shadow: none;
    line-height: 27px;
    /* height: 25px; */
    width: 25px;
    border-radius: 50%;
    overflow: hidden;
    opacity: 1;
    position: absolute;
    left: auto;
    right: 8px;
    top: 8px;
    z-index: 1;
    transition: all 0.3s;
}
.modal-dialog button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0;
    float: right;
    font-size: 25px;
    font-weight: 800;
    text-shadow: none;
    line-height: 27px;
    /* height: 25px; */
    width: 25px;
    border-radius: 50%;
}
.modal-body {
    padding:40px 40px !important;
    position: relative;
}
.modal-body .title {
    color: #000000;
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 1px;
    margin: 0 0 20px;
    font-family: "Nunito",sans-serif;
}
.modal-body .form-group {
    text-align: left;
    margin-bottom: 20px;
    position: relative;
}
.modal-body .input-icon {
    color: #777;
    font-size: 18px;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 20px;
}
.modal-body .form-control {
    font-size: 17px;
    height: 45px;
    width: 100%;
    padding: 6px 0 6px 50px;
    margin: 0 auto;
    border: 2px solid #495057;
    border-radius: 5px;
    box-shadow: none;
    outline: none;
}
.form-control {
    display: block;
    width: 100%;
    font-weight: 500;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.modal-content .modal-body .btn {
    color: #fff;
    background: linear-gradient(to right, #004085, #0056b3, #273158);
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    line-height: 38px;
    width: 100%;
    height: 40px;
    padding: 0;
    border: none;
    border-radius: 5px;
    border: none;
    display: inline-block;
    transition: all 0.6s ease 0s;
}
.modal-content {
    max-width: 500px;
   
}
    </style> 
	
<!-- Form Popup CSS Ends -->	

  
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>	
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
   <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top px-2">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="https://www.finowings.com/img/finowings-logo.png" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="https://www.finowings.com/" class="nav-item nav-link">Home</a>
              	<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Academy</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://www.finowings.com/finowings-academy/" class="dropdown-item">Finowings Academy</a>
                      <a href="https://www.finowings.com/financial-books/" class="dropdown-item">Books</a>                       
                    </div>
                </div>
                <a href="https://www.finowings.com/technical-analysis-course/" class="nav-item nav-link active">Courses</a>
				<a href="https://www.finowings.com/blog/" class="nav-item nav-link">Blog</a>
				<a href="https://www.finowings.com/IPO/" class="nav-item nav-link">IPO</a>
				<!--<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">IPO</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://www.finowings.com/SME-IPO/" class="dropdown-item">SME IPOs</a>
                      <a href="https://www.finowings.com/IPO/" class="dropdown-item">Main Board IPOs</a>                    
                    </div>
                </div>-->
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mutual Fund</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://www.finowings.com/mutual-fund.php" class="dropdown-item">Mutual Funds</a>
                      <a href="https://www.finowings.com/NFO/" class="dropdown-item">NFO</a>                       
                    </div>
                </div>
					<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Credit Cards</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://www.finowings.com/financial-products/credit-cards/" class="dropdown-item">Credit Card</a>
                      <a href="https://www.finowings.com/financial-products/personal-loan.php" class="dropdown-item">Loan</a>                       
                    </div>
                </div>
				
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tools</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="https://www.finowings.com/financial-calculators/" class="dropdown-item">Financial Calculators</a>                    
                    </div>
                </div>
				
				<!--<a href="https://www.finowings.com/financial-products/personal-loan.php" class="nav-item nav-link">Loan</a>-->
                <a href="https://www.finowings.com/contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
           <a href="https://www.finowings.com/demat-accounts.php" class="btn-demat py-3 px-lg-5 d-none d-lg-block"><span style="font-size: 18px; font-weight:bold;">Open Demat Account</span><i class="fa fa-arrow-right ms-3"></i><br /><span style="font-size: 14px; font-weight:bold;">Learn Strategy worth Rs.15000 *</span></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Navbar Ends -->


<div style="width:100%; background-color:#20335b;">
<div class="container-xxl py-3 pt-3 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
	
	<!--Course box start-->

<div class="row">



<div class="col-lg-5 col-md-5 col-sm-6 col-12 pt-1"><img src="../admin/media/courseicons/<?php echo $img; ?>" class="img-fluid mx-auto d-block"></div>



<div class="col-lg- col-md-4 col-sm-6 col-12 pt-1">
<h3 style="color: #FFFFFF;"><?php echo $title; ?></h3>
<p><i class="fas fa-star" style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <font style="font-size:14px; color:#FFFFFF;">(<?php echo $rating_numbers; ?>)</font></p>
<br />
<font style="padding-top:20px; font-size:20px; color:#f7bf22;"><strong>Coach:</strong> <span style="color: #FFFFFF;">Dr. Mukul Agrawal</span></font><br><br>
<font style="padding-top:20px; font-size:20px; color:#f7bf22;"><strong>Language:</strong> <span style="color: #FFFFFF;"><?php echo $languages; ?></span></font><br><br>
<font style="padding-top:20px; font-size:24px; color: #FFFFFF;">Rs. <?php echo $sale_p; ?></font>&nbsp;&nbsp;<font style="padding-top:20px; font-size:18px; color: #f7bf22;"><del>Rs. <?php echo $price; ?></del></font>&nbsp;&nbsp;<font style="font-size: 14px; color:#FFFFFF;">&nbsp;(including 18% GST)</font>

<!--<font style="padding-top:22   px; font-size:24px; color: #FFFFFF;">&#x20B9; <?php echo $price; ?></font>&nbsp;&nbsp;<font style="font-size: 14px;">&nbsp;(including 18% GST)</font>-->


<!--<div style="padding-top:20px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#139dd7; border:1px solid ##139dd7;">
Buy Now</button></div>-->

<div style="padding-top:25px;" data-toggle="modal" data-target="#exampleModal"> 
<a class="btn btn-primary py-3 px-5 mt-2 mb-2">Join Now</a>
</div>




</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-12" style="background:#e9f9ff;">
<br />
<!--<div class="coupon" style="background:#273158;">
  <div class="container223">
  <br />
    <h3 style="color:#E9F9FF;"><b>Flat Discount of Rs. 2600 on Fee</b></h3> 
    <p style="color:#FFFFFF;">Offer Applicable Only for First 50 Students</p>
  </div>
  <div class="container">
    <p style="color:#E9F9FF;">Use Promo Code: <span class="promo">REPUBLICDAY</span></p>
    <p class="expire">Valid Till 26th Jan, 2024</p>
  </div>
</div>
<br />-->
<h3 align="center" style="color: #273158; padding-top:15px">Upcoming Batch</h3>
<div align="center" style="font-size:24px; font-weight:600; background: #00abe9; color:#FFFFFF;"><p id="demo"></p></div>

<div style="padding-top:20px; padding-left:10px; font-size:17px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Mentorship</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Revision Session</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Best Screener for Intraday</a> <br></div>
<!--<<div style="padding-top:10px; padding-left:10px; font-size:17px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Best Stock Level</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px; padding-bottom:30px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Per Day 2 Stocks</a> <br></div>
-->
<br>
<div align="center" data-toggle="modal" data-target="#exampleModal">
<a class="btn btn-primary py-3 px-5">Enroll Now</a></div>
<br>
<!--<div align="center" style="width:300px;"><img src="../img/diwali-diya.gif" /></div>-->
</div>



</div>
<!--Course box end-->



<!--Pop Up box start-->
<form method="POST" action="techanal-submit.php">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content">
        
       
            <div class="modal-content clearfix">
                
                
                
                <div class="modal-body">
                    <h3 class="title">Please Provide Information</h3>
        
                        <div class="form-group">
                            <span class="input-icon"><i class="fa-solid fa-user"></i></span>
                            <input type="text" name="uname" class="form-control" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa-solid fa-square-phone"></i></span>
                            <input type="text" name="mobile" class="form-control" title="enter 10 digit mobile number" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Your Number" required>
                        </div>
                        
                        
                        <button class="btn" type="submit" name="submit">Proceed</button>
                
               
        </div>
       
      </div>
    </div>
  </div>
   
    </div>
 </form> 
<!--Pop Up box end-->


</div>
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
  <!--<button class="tablinks" onClick="openCity(event, 'Paris')">Class Details</button>
  <button class="tablinks" onClick="openCity(event, 'Tokyo')">SUPPORT</button>-->
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
    <?php include("../footer.php"); ?> 
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
	
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


<!-- <script language="javascript" type="text/javascript" src="json.js"></script>-->
<!-- <script src="jquery-1.7.2.min.js"></script>-->
 <script language="javascript" type="text/javascript" src="json.js"></script>
 <script src="jquery-1.7.2.min.js"></script>
<script type="text/javascript">
  $(function(){
  
	 /* json object contains
	 	1) payOptType - Will contain payment options allocated to the merchant. Options may include Credit Card, Net Banking, Debit Card, Cash Cards or Mobile Payments.
	 	2) cardType - Will contain card type allocated to the merchant. Options may include Credit Card, Net Banking, Debit Card, Cash Cards or Mobile Payments.
	 	3) cardName - Will contain name of card. E.g. Visa, MasterCard, American Express or and bank name in case of Net banking. 
	 	4) status - Will help in identifying the status of the payment mode. Options may include Active or Down.
	 	5) dataAcceptedAt - It tell data accept at CCAvenue or Service provider
	 	6)error -  This parameter will enable you to troubleshoot any configuration related issues. It will provide error description.
	 */	  
  	  var jsonData;
  	  var access_code="AVRV23JI94AU14VRUA" // shared by CCAVENUE 
	  var amount="5.00";
  	  var currency="INR";
  	  
      $.ajax({
           url:'https://secure.ccavenue.com/transaction/transaction.do?command=getJsonData&access_code='+access_code+'&currency='+currency+'&amount='+amount,
           dataType: 'jsonp',
           jsonp: false,
           jsonpCallback: 'processData',
           success: function (data) { 
                 jsonData = data;
                 // processData method for reference
                 processData(data); 
		 // get Promotion details
                 $.each(jsonData, function(index,value) {
			if(value.Promotions != undefined  && value.Promotions !=null){  
				var promotionsArray = $.parseJSON(value.Promotions);
		               	$.each(promotionsArray, function() {
					console.log(this['promoId'] +" "+this['promoCardName']);	
					var	promotions=	"<option value="+this['promoId']+">"
					+this['promoName']+" - "+this['promoPayOptTypeDesc']+"-"+this['promoCardName']+" - "+currency+" "+this['discountValue']+"  "+this['promoType']+"</option>";
					$("#promo_code").find("option:last").after(promotions);
				});
			}
		});
           },
           error: function(xhr, textStatus, errorThrown) {
               alert('An error occurred! ' + ( errorThrown ? errorThrown :xhr.status ));
               //console.log("Error occured");
           }
   		});
   		
   		$(".payOption").click(function(){
   			var paymentOption="";
   			var cardArray="";
   			var payThrough,emiPlanTr;
		    var emiBanksArray,emiPlansArray;
   			
           	paymentOption = $(this).val();
           	$("#card_type").val(paymentOption.replace("OPT",""));
           	$("#card_name").children().remove(); // remove old card names from old one
            $("#card_name").append("<option value=''>Select</option>");
           	$("#emi_div").hide();
           	
           	//console.log(jsonData);
           	$.each(jsonData, function(index,value) {
           		//console.log(value);
            	  if(paymentOption !="OPTEMI"){
	            	 if(value.payOpt==paymentOption){
	            		cardArray = $.parseJSON(value[paymentOption]);
	                	$.each(cardArray, function() {
	    	            	$("#card_name").find("option:last").after("<option class='"+this['dataAcceptedAt']+" "+this['status']+"'  value='"+this['cardName']+"'>"+this['cardName']+"</option>");
	                	});
	                 }
	              }
	              
	              if(paymentOption =="OPTEMI"){
		              if(value.payOpt=="OPTEMI"){
		              	$("#emi_div").show();
		              	$("#card_type").val("CRDC");
		              	$("#data_accept").val("Y");
		              	$("#emi_plan_id").val("");
						$("#emi_tenure_id").val("");
						$("span.emi_fees").hide();
		              	$("#emi_banks").children().remove();
		              	$("#emi_banks").append("<option value=''>Select your Bank</option>");
		              	$("#emi_tbl").children().remove();
		              	
	                    emiBanksArray = $.parseJSON(value.EmiBanks);
	                    emiPlansArray = $.parseJSON(value.EmiPlans);
	                	$.each(emiBanksArray, function() {
	    	            	payThrough = "<option value='"+this['planId']+"' class='"+this['BINs']+"' id='"+this['subventionPaidBy']+"' label='"+this['midProcesses']+"'>"+this['gtwName']+"</option>";
	    	            	$("#emi_banks").append(payThrough);
	                	});
	                	
	                	emiPlanTr="<tr><td>&nbsp;</td><td>EMI Plan</td><td>Monthly Installments</td><td>Total Cost</td></tr>";
							
	                	$.each(emiPlansArray, function() {
		                	emiPlanTr=emiPlanTr+
							"<tr class='tenuremonth "+this['planId']+"' id='"+this['tenureId']+"' style='display: none'>"+
								"<td> <input type='radio' name='emi_plan_radio' id='"+this['tenureMonths']+"' value='"+this['tenureId']+"' class='emi_plan_radio' > </td>"+
								"<td>"+this['tenureMonths']+ "EMIs. <label class='merchant_subvention'>@ <label class='emi_processing_fee_percent'>"+this['processingFeePercent']+"</label>&nbsp;%p.a</label>"+
								"</td>"+
								"<td>"+this['currency']+"&nbsp;"+this['emiAmount'].toFixed(2)+
								"</td>"+
								"<td><label class='currency'>"+this['currency']+"</label>&nbsp;"+ 
									"<label class='emiTotal'>"+this['total'].toFixed(2)+"</label>"+
									"<label class='emi_processing_fee_plan' style='display: none;'>"+this['emiProcessingFee'].toFixed(2)+"</label>"+
									"<label class='planId' style='display: none;'>"+this['planId']+"</label>"+
								"</td>"+
							"</tr>";
						});
						$("#emi_tbl").append(emiPlanTr);
	                 } 
                  }
           	});
           	
         });
   
	  
      $("#card_name").click(function(){
      	if($(this).find(":selected").hasClass("DOWN")){
      		alert("Selected option is currently unavailable. Select another payment option or try again later.");
      	}
      	if($(this).find(":selected").hasClass("CCAvenue")){
      		$("#data_accept").val("Y");
      	}else{
      		$("#data_accept").val("N");
      	}
      });
          
     // Emi section start      
          $("#emi_banks").live("change",function(){
	           if($(this).val() != ""){
	           		var cardsProcess="";
	           		$("#emi_tbl").show();
	           		cardsProcess=$("#emi_banks option:selected").attr("label").split("|");
					$("#card_name").children().remove();
					$("#card_name").append("<option value=''>Select</option>");
				    $.each(cardsProcess,function(index,card){
				        $("#card_name").find("option:last").after("<option class=CCAvenue value='"+card+"' >"+card+"</option>");
				    });
					$("#emi_plan_id").val($(this).val());
					$(".tenuremonth").hide();
					$("."+$(this).val()+"").show();
					$("."+$(this).val()).find("input:radio[name=emi_plan_radio]").first().attr("checked",true);
					$("."+$(this).val()).find("input:radio[name=emi_plan_radio]").first().trigger("click");
					 
					 if($("#emi_banks option:selected").attr("id")=="Customer"){
						$("#processing_fee").show();
					 }else{
						$("#processing_fee").hide();
					 }
					 
				}else{
					$("#emi_plan_id").val("");
					$("#emi_tenure_id").val("");
					$("#emi_tbl").hide();
				}
				
				
				
				$("label.emi_processing_fee_percent").each(function(){
					if($(this).text()==0){
						$(this).closest("tr").find("label.merchant_subvention").hide();
					}
				});
				
		 });
		 
		 $(".emi_plan_radio").live("click",function(){
			var processingFee="";
			$("#emi_tenure_id").val($(this).val());
			processingFee=
					"<span class='emi_fees' >"+
			 			"Processing Fee:"+$(this).closest('tr').find('label.currency').text()+"&nbsp;"+
			 			"<label id='processingFee'>"+$(this).closest('tr').find('label.emi_processing_fee_plan').text()+
			 			"</label><br/>"+
                			"Processing fee will be charged only on the first EMI."+
                	"</span>";
             $("#processing_fee").children().remove();
             $("#processing_fee").append(processingFee);
             
             // If processing fee is 0 then hiding emi_fee span
             if($("#processingFee").text()==0){
             	$(".emi_fees").hide();
             }
			  
		});
		
		
		$("#card_number").focusout(function(){
			/*
			 emi_banks(select box) option class attribute contains two fields either allcards or bin no supported by that emi 
			*/ 
			if($('input[name="payment_option"]:checked').val() == "OPTEMI"){
				if(!($("#emi_banks option:selected").hasClass("allcards"))){
				  if(!$('#emi_banks option:selected').hasClass($(this).val().substring(0,6))){
					  alert("Selected EMI is not available for entered credit card.");
				  }
			   }
		   }
		  
		});
			
			
	// Emi section end 		
   
   
   // below code for reference 
 
   function processData(data){
         var paymentOptions = [];
         var creditCards = [];
         var debitCards = [];
         var netBanks = [];
         var cashCards = [];
         var mobilePayments=[];
         $.each(data, function() {
         	 // this.error shows if any error   	
             console.log(this.error);
              paymentOptions.push(this.payOpt);
              switch(this.payOpt){
                case 'OPTCRDC':
                	var jsonData = this.OPTCRDC;
                 	var obj = $.parseJSON(jsonData);
                 	$.each(obj, function() {
                 		creditCards.push(this['cardName']);
                	});
                break;
                case 'OPTDBCRD':
                	var jsonData = this.OPTDBCRD;
                 	var obj = $.parseJSON(jsonData);
                 	$.each(obj, function() {
                 		debitCards.push(this['cardName']);
                	});
                break;
              	case 'OPTNBK':
	              	var jsonData = this.OPTNBK;
	                var obj = $.parseJSON(jsonData);
	                $.each(obj, function() {
	                 	netBanks.push(this['cardName']);
	                });
                break;
                
                case 'OPTCASHC':
                  var jsonData = this.OPTCASHC;
                  var obj =  $.parseJSON(jsonData);
                  $.each(obj, function() {
                  	cashCards.push(this['cardName']);
                  });
                 break;
                   
                  case 'OPTMOBP':
                  var jsonData = this.OPTMOBP;
                  var obj =  $.parseJSON(jsonData);
                  $.each(obj, function() {
                  	mobilePayments.push(this['cardName']);
                  });
              }
              
            });
           
           //console.log(creditCards);
          // console.log(debitCards);
          // console.log(netBanks);
          // console.log(cashCards);
         //  console.log(mobilePayments);
            
      }
  });
</script>


</body>

</html>

