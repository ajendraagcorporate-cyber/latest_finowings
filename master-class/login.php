<?php
//session_start();
if(isset($_REQUEST['submit']))
{
 include("../DLL/config.php");
 $query = "select * from master_class_reg where email='$_POST[email]'";
 $result = mysqli_query($con, $query);
 $row = $result->fetch_assoc();
 echo $name = $row["name"];
 echo $email = $row["email"];
}	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Free Master Class Login | Finowings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Payment for Training, Mentorship, Newsletter, Online Courses, or any other products will not be refunded under any circumstances." name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

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
	
	<!--Bootstrap code-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!--Bootstrap code-->

	
	<style type="text/css">
	#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow px-2">
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
                  <!--<a href="technical-analysis-course/" class="nav-item nav-link">Courses</a>-->
				
				
                <div class="nav-item dropdown">
                    <a href="technical-analysis-course/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="../technical-analysis-course/" class="dropdown-item">Technical Analysis Course</a>
                        <a href="../the-simplest-book-for-technical-analysis/" class="dropdown-item">The Simplest Book For Technical Analysis</a>
                        <!--<a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>-->
                    </div>
                </div>
				<a href="../blog/" class="nav-item nav-link active">Blog</a>
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="../financial-freedom-conclave/" class="dropdown-item">Financial Freedom Conclave 2022</a>
                        
                    </div>
                </div>
                <a href="../contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
              <a href="../demat-accounts.php" class="btn btn-primary py-3 px-lg-5 d-none d-lg-block"><span style="font-size: 18px;">Open Demat Account</span><i class="fa fa-arrow-right ms-3"></i><br /><span style="font-size: 14px;">Unlimited Benefits*</span></a>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Privacy Policy Starts -->
	
    <div class="container-xxl py-5">
        <div class="container">
		
		<h2 align="center">Master Class Login</h2>
            <br /><br />
            
			<form method="post" action="">
                        
							
                            <div align="center">
                               
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Login with Your Registered Email" style="width:500px;" required="required">
                                    
                               
                            </div>
                            <br /><br />
                            <div align="center">
                                 <input type="submit" name="submit" value="Login" class="btn btn-primary" style="background:#00acea; text-decoration: none; border:1px solid #00acea;" /> 
                            </div>
							
							
                    </form>
           
			
        </div>
    </div>
   
<br /><br /><br /><br /><br /><br /><br /><br />
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