<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inflation Calculator – Plan for the Future with Accurate Projections</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="inflation calculator,inflation calculator india,inflation calculator formula,inflation cal,inflation rate calculator,inflation cost calculator,inflation formula,calculate inflation rate calculator,inflation calculator rupees,inflation calculator inr,inr inflation calculator,rupee inflation calculator,inflation calculator by year,inflation calculator online,online inflation calculator,"
        name="keywords">

    <meta content="Use our Inflation Calculator to estimate the impact of inflation on your savings. Try our Inflation Calculator India and calculate with the inflation formula."
        name="description">

    <link rel="canonical" href="https://www.finowings.com/financial-calculators/inflation-calculator/" />

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
                    <div class="page-content pt-3">
                        <div class="form-v4-content d-block w-100">
                            <h2>Inflation Calculator</h2>
                            <div class="calculator">
                                <div class="left">


                                    <div class="results">
                                        <h3>Current Cost</h3>
                                        <p id="currentAmountDisplay">Rs.0</p>
                                    </div>
                                    <div class="results">
                                        <h3>Future Cost</h3>
                                        <p id="futureValueDisplay">Rs.0</p>
                                    </div>



                                </div>

                                <div class="chart-container">

                                    <canvas id="pieChart" width="100" height="100"></canvas>
                                </div>
                                <div class="right">
                                    <div>
                                        <label for="currentAmount">Current Cost</label>
                                        <input type="range" id="currentAmount" min="1000" max="10000000" step="1000" value="100000">
                                        <input type="text" id="currentAmountValue" value="1,00,000">
                                    </div>

                                    <div>
                                        <label for="inflationRate">Inflation Rate (%)</label>
                                        <input type="range" id="inflationRate" min="1" max="40" step="0.1" value="6">
                                        <input type="text" id="inflationRateValue" value="6%">
                                    </div>

                                    <div>
                                        <label for="years">Number of Years</label>
                                        <input type="range" id="years" min="1" max="50" step="1" value="5">
                                        <input type="text" id="yearsValue" value="5">
                                    </div>
                                </div>


                            </div>
                            <div class="total">
                                <h3>Future Cost After Inflation*:</h3>
                                <p>Rs. <span id="finalFutureValue">0</span></p>
                            </div>
                        </div>


                    </div>





                    <br /><br />
                    <div align="left">
                        <h3>What is Inflation?</h3>
                        <p align="justify">
                            Inflation is the term used to describe the increase in the prices of typical goods and services over a certain period and this leads to a fall in the dollar’s worth. What this means thus, is that, the more the prices increase, the more the worth of the rupee depreciates.
                            <br>
                            There are two main ways to measure inflation:
                        <ul>
                            <li>Consumer Price Index (CPI): Is the measure that investigates the changes in the retail prices.</li>
                            <li>Wholesale Price Index (WPI): Is that which investigates the changes in the prices offered at wholesale.</li>
                        </ul>



                        </p>
                        <br />
                        <h3>How does inflation affect savings?</h3>
                        <p align="justify">Given enough time, inflation will definitely reverse the value of your savings. Since investors want their value in terms of savings and investments over time, inflation have made goods and service a lot more expensive thus the purchasing power gets depressed. Many people keep funds in bank accounts in a bid to receive some interest as a return on their funds, however, the interest received is not always adequate to combat inflation. Even so, the effect of inflation on savings is different depending on the kind of savings because it is possible to have different outcome in high periods of inflation in various investments.
                        </p>
                        <h3>What is an Inflation Calculator?
                        </h3>
                        <p align="justify">
                            An inflation calculator gives you a perspective concerning money and values over a certain period and how inflation could have an impact towards it. This means that it helps you plan in what you would refer to as the future currency purchasing power of your money after a period due to inflationary causes. This tool can also assist you to keep track of and aid you in projecting the money value in a forward-looking perspective that would be obtained were it to be capitalized.

                        </p>
                        <h3>Benefits of Using an Inflation Calculator</h3>
                        <p align="justify">
                            Adapt to Rising Costs: It assists organizations and individuals to prepare for the forthcoming inflation, hence, enabling them to plan their savings and investment in order to ease financial burden.
                            Discerning Making of Decisions: The calculator has value as a tool that contains background information relative to the inflation trends and how they may affect savings, investments, and spending power. This facilitates planning of budgets, retirement and investment.
                            Become aware of the Realized Rate of Return: It enables one to know if inflation is being beaten by the construction of an investment and if positive returns are being generated from this investment, guaranteeing one’s future wealth.
                            Awareness Aid: It informs users about inflation and its effects on their expenses, which a person needs to control more wisely.



                        </p>




                        <h3>How to Calculate the Inflation Calculator ?</h3>

                        <p>
                            <b>CPI = (Cost of Fixed Basket of Goods and Services in Current Year/ Cost of Fixed Basket of Goods and Services in Base Year) *100</b>

                            <br>
                            Note that inflation can be calculated using the formula once the CPI for the two years is calculated.
                            <br>
                            <b>Formula for Inflation:</b>
                            <br>

                            Inflation can be measured by using Consumer Price Index (CPI)
                            <br>
                            <b>Inflation = ((CPI x+1 – CPIx)/ CPIx))*100</b>

                            <br>
                            Note: CPIx is the Initial Consumer Price of the Index
                        </p>



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