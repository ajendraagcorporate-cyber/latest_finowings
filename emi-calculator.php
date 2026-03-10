<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EMI Calculator</title>
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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	 <link href="css/calculator-style.css" rel="stylesheet">
	
	<script src="js/emi-calc.js"></script>

	<!-- Pie Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	
<style type="text/css">
#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}  

#chart_wrap {
    position: relative;
    padding-bottom: 100%;
    height: 0;
    overflow:hidden;
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="img/logo1.png" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <!--<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>-->
				<a href="blogs.php" class="nav-item nav-link">Blog</a>
				<a href="calculators.php" class="nav-item nav-link active">Financial Calculators</a>
                <a href="contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="demat-accounts.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Open Demat Account<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Navbar Ends -->

	
	<!-- Courses First Row Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2 style="color: #FFFFFF;">INFORMATION</h2>
				<p class="text-1" align="justify">EMI is a facility for those people who keep needing huge amounts for their work. It is not possible to repay large sums of money all at once. In such a situation, an EMI of such an amount is made to repay the loan amount, which can be repaid. Some part of the amount is paid every month to repay the loan amount, it is called EMI. With this calculator you can calculate your EMI.</p>
				<!--<div class="form-left-last">
					<input type="submit" name="account" class="account" value="Have An Account">
				</div>-->
			</div>
			<form class="form-detail" method="post" id="myform">
				<h2 style="color:#436bb2;">EMI Calculator</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">Loan Amount</label>
						<input type="text" name="loan_amount" id="loan_amount" class="input-text" placeholder="Ex: 100000" required>
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Loan Tenure</label>
						<input type="text" name="loan_tenure" id="loan_tenure" class="input-text" placeholder="Ex: 10" required>
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Interest Rate(P.A)</label>
					<input type="text" name="interest_rate" id="interest_rate" class="input-text" placeholder="Ex: 12%" required>
				</div>
				<!--<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Comfirm Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>
				</div>
				<div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
					  	<input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span>
					</label>
				</div>-->
				<div class="form-row-last">
					<input type="button" id="submitFormData" onclick="SubmitFormData();" value="Calculate EMI" class="btn btn-primary" style="background:#00acea; color:#FFFFFF; text-decoration: none; border:1px solid #00acea;" /> 
				</div>
				
				<div id="error_message" style="margin-top: 20px;">
     
                              </div>
 
 

		</form>
		
			
			
			
		</div>
		
		
		
				
		
		
	</div>
	
	
	
                    <div id="results" align="center" class="position-relative overflow-hidden">
									<!-- All data will display here  -->
							</div>
					
					
		
    </div>
   </div>
    <!-- Courses First Row End -->
	
	<?php include("other-calculators.php"); ?>
	
	
	
	
	
    <!-- Footer Start -->
    <?php include("footer.php"); ?> 
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	
		  	},
		  	messages: {
		  		loan_amount: {
		  			required: "Please enter Loan Amount"
		  		},
		  		loan_tenure: {
		  			required: "Please enter Loan Tenure"
		  		}
		  	}
		});
	</script>
	
</body>

</html>

