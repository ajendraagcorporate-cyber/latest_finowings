<?php include('Crypto.php')?>
<?php

	error_reporting(0);
	
	$workingKey='F4CBBCDC802AF67BE3F965956BAE700A';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	//echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		//echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		
	}
	else if($order_status==="Aborted")
	{
		//echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		//echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		//echo "<br>Security Error. Illegal access detected";
	
	}

	//echo "<br><br>";

	//echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	//echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
	}

	//echo "</table><br>";
	//echo "</center>";
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Courses - Finowings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Stock market courses that will help you to Earn extra money than your job or business." name="description">

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
        <img src="../img/finowings-logo.png" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="../about-finowings/" class="nav-item nav-link">About Us</a>
				 <a href="../finowings-academy/" class="nav-item nav-link">Finowings Academy</a>
                <a href="../technical-analysis-courses/" class="nav-item nav-link active">Courses</a>
                <!--<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>-->
				<a href="../blog/" class="nav-item nav-link">Blog</a>
                <a href="../contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
              <a href="../demat-accounts.php" class="btn btn-primary py-3 px-lg-5 d-none d-lg-block"><span style="font-size: 18px;">Open Demat Account</span><i class="fa fa-arrow-right ms-3"></i><br /><span style="font-size: 14px;">Unlimited Benefits*</span></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Navbar Ends -->

	
	  <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Options Strategy - 12 Months</h1>
            </div>
			<div align="center" style="font-size:18px; color:#273158;">
<?php			
          if($order_status==="Success")
	{
		echo "<br>Congratulations !! You have completed your Payment successfully for Technical Analysis Class (Live). For Further Details Connect with your Coordinator.";
		
	}
	else if($order_status==="Aborted")
	{
		echo "<br>We will keep you posted regarding the status of your order through E-Mail. You can also contact with your Coordinator.";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>The transaction has been declined due to any Reason associated with choosen Payment Method or Bank. You can try again after some time. Thank You.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";
?>	
        </div>
    </div>
    <!-- Courses End -->
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
</body>

</html>


