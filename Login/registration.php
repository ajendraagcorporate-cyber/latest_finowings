<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
if(isset($_POST['submit']))
{ 


if(isset($_POST['submit']))
{ 




	$link = $con;

	$name =  $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$pass =  $_REQUEST['pass'];
	$contact = $_REQUEST['contact'];
	$city = $_REQUEST['city'];
	$date = date("Y-m-d h:m:s");
	
	$sql = "insert into aspirants_mst (name, login_email, password, contact, city, created_datetime) values ('$name', '$email', '$pass', '$contact', '$city', '$date')";
	
	$otp = rand(100000,999999);
	$t = $otp + 525756;
    
	$payload = file_get_contents('https://sms.digidonar.com/app/smsapi/index.php?key=3625D143538A6C&campaign=10873&routeid=101494&type=text&contacts='.$contact.'&senderid=FNWNGS&msg=Dear%20User%2C%20OTP%20'.$otp.'%20For%20Mobile%20Verification%2C%20valid%20for%205%20minutes%20only-%20Finowings&template_id=1107168570266165377&pe_id=1101667680000067107');
	
  if(mysqli_query($link, $sql)){
  header( "Location: https://www.finowings.com/Login/verification.php?t=$t" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Form | Finowings Training Academy Pvt. Ltd.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

  <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	
	

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

</head>
<body>

  <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top px-2">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="../img/finowings-logo.png" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="../about-finowings/" class="nav-item nav-link">About Us</a>
				 <a href="../finowings-academy/" class="nav-item nav-link active">Finowings Academy</a>
               <!--<a href="technical-analysis-course/" class="nav-item nav-link">Courses</a>-->
				
				
               <a href="../technical-analysis-course/" class="nav-item nav-link">Courses</a>
				
              <!--  <div class="nav-item dropdown">
                    <a href="technical-analysis-course/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="../technical-analysis-course/" class="dropdown-item">Technical Analysis Course</a>
                        <a href="../the-simplest-book-for-technical-analysis/" class="dropdown-item">The Simplest Book For Technical Analysis</a>
                        <!--<a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>-->
                  <!--  </div>
                </div>-->
				
				   <a href="../the-simplest-book-for-technical-analysis/" class="nav-item nav-link">Financial Books</a>
				<a href="../blog/" class="nav-item nav-link">Blog</a>
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="../financial-freedom-conclave/" class="dropdown-item">Financial Freedom Conclave 2022</a>
                        
                    </div>
                </div>
                <a href="../contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
           <a href="../demat-accounts.php" class="btn-demat py-3 px-lg-5 d-none d-lg-block"><span style="font-size: 18px; font-weight:bold;">Open Demat Account</span><i class="fa fa-arrow-right ms-3"></i><br /><span style="font-size: 14px; font-weight:bold;">Get Free Intraday Strategies</span></a>
        </div>
    </nav>
    <!-- Navbar End -->
	
	 <div class="container-xxl py-3 pt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Finowings Academy</h6>
                <h1 class="mb-5">Giving Wings to your Finance</h1>
            </div>
	       </div>
		</div>   
	
	<div class="limiter">
	   <div class="container-login100">
	   <div align="center" style="width:70%; background: url('images/fa-bg.jpg') no-repeat !important;">
			<div align="center" class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-120" method="post" action="">
					<span class="login100-form-title">
						Register Yourself
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Name">
						<input class="input100" type="text" name="name" placeholder="Please enter Your Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email ID">
						<input class="input100" type="email" name="email" placeholder="Please enter Your Email ID">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please make a Password">
						<input class="input100" type="password" name="pass" placeholder="Please make a Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Contact Number">
						<input class="input100" type="number" name="contact" placeholder="Please enter Your Contact Number">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Please enter City">
						<input class="input100" type="text" name="city" placeholder="Please enter Your City">
						<span class="focus-input100"></span>
					</div>

					<!--<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>-->

					<div class="container-login100-form-btn p-t-30 p-b-30">
						<!--<button class="login100-form-btn">
							Register
						</button>-->
					<input type="submit" name="submit" class="login100-form-btn" value="Register">	
					</div>

				
				</form>
			</div>
		</div>
	</div>
	</div>

    <!-- Footer Start -->
    <?php include("footer.php"); ?> 
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
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';


	$link = $con;

	$name =  $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$pass =  $_REQUEST['pass'];
	$contact = $_REQUEST['contact'];
	$city = $_REQUEST['city'];
	$date = date("Y-m-d h:m:s");
	
	$sql = "insert into aspirants_mst (name, login_email, password, contact, city, created_datetime) values ('$name', '$email', '$pass', '$contact', '$city', '$date')";
	
	$otp = rand(100000,999999);
	$t = $otp + 525756;
    
	$payload = file_get_contents('https://sms.digidonar.com/app/smsapi/index.php?key=3625D143538A6C&campaign=10873&routeid=101494&type=text&contacts='.$contact.'&senderid=FNWNGS&msg=Dear%20User%2C%20OTP%20'.$otp.'%20For%20Mobile%20Verification%2C%20valid%20for%205%20minutes%20only-%20Finowings&template_id=1107168570266165377&pe_id=1101667680000067107');
	
  if(mysqli_query($link, $sql)){
  header( "Location: https://www.finowings.com/Login/verification.php?t=$t" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Form | Finowings Training Academy Pvt. Ltd.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

  <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	
	

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

</head>
<body>

  <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top px-2">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="../img/finowings-logo.png" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="../about-finowings/" class="nav-item nav-link">About Us</a>
				 <a href="../finowings-academy/" class="nav-item nav-link active">Finowings Academy</a>
               <!--<a href="technical-analysis-course/" class="nav-item nav-link">Courses</a>-->
				
				
               <a href="../technical-analysis-course/" class="nav-item nav-link">Courses</a>
				
              <!--  <div class="nav-item dropdown">
                    <a href="technical-analysis-course/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="../technical-analysis-course/" class="dropdown-item">Technical Analysis Course</a>
                        <a href="../the-simplest-book-for-technical-analysis/" class="dropdown-item">The Simplest Book For Technical Analysis</a>
                        <!--<a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>-->
                  <!--  </div>
                </div>-->
				
				   <a href="../the-simplest-book-for-technical-analysis/" class="nav-item nav-link">Financial Books</a>
				<a href="../blog/" class="nav-item nav-link">Blog</a>
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="../financial-freedom-conclave/" class="dropdown-item">Financial Freedom Conclave 2022</a>
                        
                    </div>
                </div>
                <a href="../contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
           <a href="../demat-accounts.php" class="btn-demat py-3 px-lg-5 d-none d-lg-block"><span style="font-size: 18px; font-weight:bold;">Open Demat Account</span><i class="fa fa-arrow-right ms-3"></i><br /><span style="font-size: 14px; font-weight:bold;">Get Free Intraday Strategies</span></a>
        </div>
    </nav>
    <!-- Navbar End -->
	
	 <div class="container-xxl py-3 pt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Finowings Academy</h6>
                <h1 class="mb-5">Giving Wings to your Finance</h1>
            </div>
	       </div>
		</div>   
	
	<div class="limiter">
	   <div class="container-login100">
	   <div align="center" style="width:70%; background: url('images/fa-bg.jpg') no-repeat !important;">
			<div align="center" class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-120" method="post" action="">
					<span class="login100-form-title">
						Register Yourself
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Name">
						<input class="input100" type="text" name="name" placeholder="Please enter Your Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email ID">
						<input class="input100" type="email" name="email" placeholder="Please enter Your Email ID">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please make a Password">
						<input class="input100" type="password" name="pass" placeholder="Please make a Password">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Contact Number">
						<input class="input100" type="number" name="contact" placeholder="Please enter Your Contact Number">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Please enter City">
						<input class="input100" type="text" name="city" placeholder="Please enter Your City">
						<span class="focus-input100"></span>
					</div>

					<!--<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>-->

					<div class="container-login100-form-btn p-t-30 p-b-30">
						<!--<button class="login100-form-btn">
							Register
						</button>-->
					<input type="submit" name="submit" class="login100-form-btn" value="Register">	
					</div>

				
				</form>
			</div>
		</div>
	</div>
	</div>

    <!-- Footer Start -->
    <?php include("footer.php"); ?> 
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
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
