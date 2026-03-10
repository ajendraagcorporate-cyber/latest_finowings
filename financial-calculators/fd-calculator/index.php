<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online FD Calculator: Calculate Returns with Fixed Deposit Rates

    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="fd calculator,fixed deposit calculator,fixed deposit interest rate calculator,fixed deposit rates calculator,fd fixed deposit calculator,fd interest calculator,fixed deposit interest calculator,online fixed deposit calculator,online fd calculator,fd interest calculator online,fd calculator online,calculate fixed deposit interest online, calculate interest on fd online,		
"name="keywords">
    <meta content="Use our Fixed Deposit Interest Rate Calculator to calculate returns and compare the latest FD rates. Get instant results with our FD calculator." name="description">
	
	<link rel="canonical" href="https://www.finowings.com/financial-calculators/fd-calculator/" />

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

	<!-- Courses First Row Start -->
     <div class="container-xxl py-5">
        <div class="container">

            <div class="row">
                <!-- Left Ad -->
                <div class="col-lg-2 col-md-3 d-none d-md-block">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
                    <!-- HIndi-Website-Right-3 -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4481710634198846"
                        data-ad-slot="4503473632"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <!-- Center Content -->
                <div class="col-lg-8 col-md-12">
            <div class="page-content">
			<div class="form-v4-content d-block w-100">
                <h2>FD Calculator</h2>
                <div class="calculator">
                <div class="left">
         

            <div class="result-box">
                <h3>Principal Amount</h3>
                <p id="principalAmount">Rs.0</p>
            </div>
            <div class="result-box">
                <h3>Interest Earned</h3>
                <p id="interestEarned">Rs.0</p>
            </div>
            <div class="result-box">
                <h3>Total Maturity Amount</h3>
                <p id="totalMaturity">Rs.0</p>
            </div>

        </div>

           
        <div class="chart-container">

            <canvas id="pieChart" ></canvas>
        </div>
        <div class="right">
            <div>
                <label for="principal">Principal Amount</label>
                <input type="range" id="principal" min="10000" max="10000000" step="1000" value="200000">
                <input type="text" id="principalValue" value="2,00,000">
            </div>

            <div>
                <label for="rate">Interest Rate (per annum)</label>
                <input type="range" id="rate" min="1" max="20" step="0.1" value="6.5">
                <input type="text" id="rateValue" value="6.5%">
            </div>

            <div>
                <label for="tenure">Tenure (years)</label>
                <input type="range" id="tenure" min="1" max="30" step="1" value="5">
                <input type="text" id="tenureValue" value="5">
            </div>

            <div>
                <!-- <label for="frequency">Compounding Frequency</label> -->
                <select id="frequency" class="form-select d-none">
                    <option value="4">Quarterly</option>
                    <option value="1">Annually</option>
                    <option value="12">Monthly</option>
                </select>
            </div>
        </div>
			</div>
            <div class="total">
                <h3>Maturity Value*:</h3>
                <p>Rs. <span id="maturityValue">0</span></p>
            </div>
			</div>											
	</div>



                    </div>



                    <!-- Text Content -->
                    <br /><br />
                    <div align="left">
                        <h3>What is a FD Calculator</h3>
                        <p align="justify">
                            Before anyone tries to invest their money into a fixed deposit (FD) it is better to first know how much return one will make from that deposit. This helps in knowing the maturity amount, the time period for investment, and the interest payment dates. Although calculating compound interest can prove to be a hard task when one decides to do it on their own, using online FD calculator it is easy to perform this task.

                        </p>
                         
                        <br />
                        <h3>How FD calculator can help you?</h3>
                        <p align="justify">It may be difficult and time consuming to determine how much you shall get from a Fixed Deposit(FD). But you can calculate instantly by using FD Calculator: 
                            <br>
                            Its benefits are below -
                        </p>		

                        <p align="justify">
                            <b>Risking Simple Math:</b> An FD calculator and the like eliminates the need to perform long divisions and does complex calculations in seconds.
                        </p>
                        <p align="justify">
                            <b>Convenience:</b> It reduces the amount of time one would use in performing the calculations by themselves thereby hastening the activity.
                        </p>
                        <p align="justify">
                            <b>Understand Capabilities:</b>
                            The tool also enables you to analyze current maturity amount and interest rates of individual banks. Hence, you will manage to determine the more favorable bank for your savings.
                        </p>




                        <h3>How to Calculate the fixed deposit calculator?</h3>
                        <p>
                            Formula:
                            <br>
                            The fixed deposit calculator for simple interest FD uses the following formula –
                            <br>
                            <b>M = P + (P x r x t/100), </b>

                        </p>

                        <ul>
                            <li>P  = is the principal amount that you deposit</li>
                            <li>r = is the rate of interest per annum</li>
                            <li>t  = is the tenure in years</li>
                        </ul>

                    </div>

                </div>

                <!-- Right Ad -->
                <div class="col-lg-2 col-md-3 d-none d-md-block">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
                    <!-- HIndi-Website-Right-3 -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4481710634198846"
                        data-ad-slot="4503473632"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
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

