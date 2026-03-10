<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Public Provident Fund Calculator | Easy PPF Calculator Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="public provident fund calculator,ppf calculator per year,ppf calculator for 1 year,ppf investment calculation,provident fund maturity calculator,ppf calculator,public provident fund ppf calculator,ppf account calculator,ppf return calculator,ppf interest rate calculator,ppf interest calculator,ppf maturity calculator,ppf calculator online,public provident fund interest calculator,public provident fund interest rate calculator,ppf investment calculator,calculate ppf amount			
" name="keywords">
    <meta content="Our PPF calculator helps calculate Public Provident Fund returns, interest, and maturity online. Get fast and accurate results with this PPF return calculator." name="description">
	
	<link rel="canonical" href="https://www.finowings.com/financial-calculators/public-provident-fund" />

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


    <!-- Courses First Row Start -->
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
                    <h2>PPF Calculator</h2>

                    <div class="calculator">
                        <div class="left">
                            <div class="result d-none">
                                <div>Yearly Contribution</div>
                                <div id="yearlyContributionDisplay">Rs.0</div>
                            </div>


                            <div class="results">
                                <h3>Total Invested Amount</h3>
                                <p id="totalInvestedDisplay">Rs.0</p>
                            </div>
                            <div class="results">
                                <h3>Total Interest Earned</h3>
                                <p id="totalInterestDisplay">Rs.0</p>
                            </div>
                            <div class="result">
                                <h3>Maturity Amount</h3>
                                <p id="maturityAmountDisplay">Rs.0</p>
                            </div>


                            <!-- <canvas id="pieChart" width="100" height="100"></canvas> -->
                        </div>

                        <div class="chart-container">
                            <!-- <h3>Payment Breakup</h3> -->
                            <canvas id="pieChart"></canvas>
                        </div>
                        <div class="right">
                            <div>
                                <label for="yearlyContribution">Yearly Contribution</label>
                                <input type="range" id="yearlyContribution" min="500" max="150000" step="100" value="50000">
                                <input type="text" id="yearlyContributionValue" value="50,000">
                            </div>

                            <div>
                                <label for="interestRate">Interest Rate (%)</label>
                                <input type="range" id="interestRate" min="4" max="10" step="0.1" value="7.1">
                                <input type="text" id="interestRateValue" value="7.1%">
                            </div>

                            <div>
                                <label for="years">Number of Years</label>
                                <input type="range" id="years" min="15" max="50" step="1" value="15">
                                <input type="text" id="yearsValue" value="15">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h3>Maturity Amount*:</h3>
                        <p>Rs. <span id="finalMaturityAmount">0</span></p>
                    </div>
                </div>
            </div>






        </div>





        <br /><br />
        <div align="left">
            <h3>What is Public Provident Fund calculator</h3>
            <p align="justify">
            A Public Provident Fund,  short name  (PPF) calculator helps you to understand that how much your PPF investment can grow in future.
<br>
It shows your future returns based on the amount you invest, the interest rate, and how long you invest for.
<br>
If you're unsure about how much to invest or what returns you'll get, the PPF calculator can help you plan.
<br>
Once you decide your investment amount, the calculator uses a 15-year period and the current interest rate to show your returns.
<br>
Please Make sure to invest before the 5th of every  month to earn interest for that month. If you invest after the 5th, you won’t get interest for that month.

            </p>
            <br />
            <h3>How it can help you ?</h3>
            <p align="justify">
            The PPF calculator helps investors to track their account balance and growth very easily.It also helps with questions about changing interest rates and how they affect your final amount.

This tool shows your potential profit in seconds.

Just enter basic details like how much you invest, for how long, and how often. The calculator will then show the current PPF interest rate, making it easy for anyone to use.
     </p>



  

<h3>   How to Calculate the PPF calculator?</h3>
<p>Formula:
    <br>

The calculation formula that a PPF calculator uses is as follows:
<br>
<b>F = P [({(1+i) ^n}-1)/i]</b>
</p>

<ul>
    <li>M = Maturity of PPF</li>
    <li> P = Annual installments</li>
    <li>i = Interest rate</li>
    <li>n = Number of years</li>
</ul>

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