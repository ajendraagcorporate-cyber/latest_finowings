<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online Income Tax Calculator 2023-24: Plan & Calculate Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="income tax calculator,income and tax calculator,online income tax calculator,income tax calculator 2023 24,online tax calculator,incometax calculator," name="keywords">
    <meta content="The Best Online Income Tax Calculator for accurate income and tax calculations: Get precise tax estimates using our online income tax calculator 2023-24" name="description">

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
	 <link href="../../css/calculator-style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="style.css">

<script defer src="script.js"></script>

	<!-- Pie Chart -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


	
<style type="text/css">

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
  <?php include("../../top-navigation.php"); ?>
    <!-- Navbar Ends -->

	
	
     <div class="container-xxl py-5">
 

        <div class="container">
             <!--Google Adsense Code Starts-->
<div align="center">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
				<!-- Blog-Top-Banner -->
				<ins class="adsbygoogle"
					style="display:inline-block;width:728px;height:90px"
					data-ad-client="ca-pub-4481710634198846"
					data-ad-slot="3968038623"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
            <!--Google Adsense Code Ends-->
            <div class="page-content pt-3">
			<div class="form-v4-content d-block w-100">
                <h2>Income Tax Calculator</h2>

			<div class="calculator">

            <div class="left mt-3">
           

            <div class="results">
                <h3>Annual Income</h3>
                <p id="annualIncome">Rs.0</p>
            </div>
            <div class="results">
                <h3>Tax Amount</h3>
                <p id="taxAmount">Rs.0</p>
            </div>
            <div class="results">
                <h3>Net Income After Tax</h3>
                <p id="netIncome">Rs.0</p>
            </div>

            

        </div>
        
        <div class="chart-container">

            <canvas id="pieChart" ></canvas>
        </div>

        <div class="right">
            <div>
                <label for="income">Annual Income</label>
                <input type="range" id="income" min="100000" max="10000000" step="10000" value="500000">
                <input type="text" id="incomeValue" value="5,00,000">
            </div>

            <div>
                <label for="ageGroup">Age Group</label>
                <select id="ageGroup" class="form-select">
                    <option value="below60">Below 60</option>
                    <option value="60to80">60 to 80</option>
                    <option value="above80">Above 80</option>
                </select>
            </div>

            <div>
                <label for="taxRegime">Tax Regime</label>
                <select id="taxRegime" class="form-select">
                    <option value="new">New Regime</option>
                    <option value="old">Old Regime</option>
                </select>
            </div>
        </div>
				
				</div>
                <div class="total">
                <h3>Total Payable Tax*:</h3>
                <p>Rs. <span id="finalTax">0</span></p>
            </div>
			</div>
					
	</div>
	
	
	
                  
					
	<br /><br />
   <div align="left">
          <h3>What is Income Tax Calculator           </h3>
		  <p align="justify">
          The Income and tax Calculator service intends to reach both the registered and unregistered e-Filing users in order to estimate taxes as per the Income Tax Act and sections with there relevant rules and notifications. By the provision of Income Tax Act, the users are required to provide information which seeks self-employment income as well as available deductions so as to arrive at the tax liabilities. This service even presents in comparison the tax computation approach taken under the old tax system and the new tax system.

          </p>
<br />
<h3>How does Income Calculator Works</h3>
<p align="justify">This income tax calculator calculates taxes applicable for salaried people in accordance with the prevailing tax slab. If you want to determine your overall applicable tax based on your slab, simply fill in the basic information such as age group, tax regime(Old or New) and annual earnings.
</p>		

<p>This calculator is based on the data provided in the table below.</p>
<div>
    <img src="incometax-demo.png" class="img-fluid" alt="">
    <img src="in.png" class="img-fluid" alt="">
    <img src="tax.png" class="img-fluid" alt="">
</div>	
		
    </div>
   </div>
   </div>
    <!-- Courses First Row End -->
	
	<?php include("../other-calculators.php"); ?>
	
	
	
	
	
    <!-- Footer Start -->
    <?php include("../../footer.php"); ?> 
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
	
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	
	
</body>

</html>

