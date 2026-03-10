<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GST Calculator Online: Calculate Your Goods and Service tax
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="gst calculator,including gst,gst calculator india,gst 18,gst calculator online,how to calculate gst amount,gst on price,18 percent gst calculator,how to calculate gst,gst calculation formula,how to calculate gst,gst inclusive calculator,gst formula,examples of gst calculations,gst calculation formula,gst tax calculator,gst amount,how to find gst percentage,gst formula " name="keywords">

    <meta content="Calculate GST quickly with our GST calculator online! Find out how to calculate GST and apply the right GST calculation formula on any price with ease." name="description">

    <link rel="canonical" href="https://www.finowings.com/financial-calculators/gst-calculator/" />

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
                            <h2>GST Calculator</h2>
                            <div class="calculator">

                                <div class="left mt-3">


                                    <div class="results">
                                        <h3>Initial Price</h3>
                                        <p id="initialPrice">Rs.0</p>
                                    </div>
                                    <div class="results">
                                        <h3>GST Amount</h3>
                                        <p id="gstAmount">Rs.0</p>
                                    </div>
                                    <div class="results">
                                        <h3>Total Price with GST</h3>
                                        <p id="totalPriceWithGST">Rs.0</p>
                                    </div>




                                </div>

                                <div class="chart-container">
                                    <canvas id="pieChart"></canvas>
                                </div>
                                <div class="right">
                                    <div>
                                        <label for="price">Initial Price</label>
                                        <input type="range" id="price" min="100" max="1000000" step="100" value="10000">
                                        <input type="text" id="priceValue" value="10,000">
                                    </div>

                                    <div>
                                        <label for="gstRate">GST Rate (%)</label>
                                        <input type="range" id="gstRate" min="0" max="28" step="0.1" value="18">
                                        <input type="text" id="gstRateValue" value="18%">
                                    </div>

                                    <div>
                                        <label for="priceType">Price Type</label>
                                        <select id="priceType" class="form-select">
                                            <option value="exclusive">GST Exclusive</option>
                                            <option value="inclusive">GST Inclusive</option>
                                        </select>
                                    </div>
                                </div>



                            </div>
                            <div class="total">
                                <h3>Final Price*:</h3>
                                <p>Rs. <span id="finalPrice">0</span></p>
                            </div>
                        </div>






                    </div>





                    <br /><br />
                    <div align="left">
                        <h3>What is GST Calculator</h3>
                        <p align="justify">GST is a tax in India that began on July 1, 2017, replacing taxes like VAT and sales tax. It applies to all products and services you buy. Every business must register for GST and get a GST Identification Number (GSTIN). Simultaneously as a consumer, it's important to know how much GST you're paying. So, to know how much GST you are paying, a GST calculator helps you to figure that out.
                        </p>
                        <br />
                        <h3>How Can a GST Calculator Help You?</h3>
                        <p align="justify">
                        <ul>
                            <li>It shows you exactly how much tax you're paying on any product or service.
                            </li>
                            <li>It saves time by making the calculation quick and simple.</li>
                            <li>Knowing your GST helps you avoid mistakes or overpaying.</li>
                        </ul>
                        </p>



                        <h3>How to Calculate Goods and Services Tax (GST) Using a GST Calculator?</h3>

                        <p>
                            Formula:
                            <br>
                            <b>GST amount = (Price x GST%)</b>

                            <b>Net price = Cost of the product + GST amount</b>

                            <br>
                            For example, if a product or service costs Rs. 100 and the GST levied on that is 18%, the GST amount will be 100 x 18% = Rs. 18. The net amount you’d have to pay would be Rs. 118.
                            <br>
                            For removing GST from the net price of a product, the following formula is used:
                            <br>
                            <b>GST= Original cost – [Original cost x {100/(100+GST%)}]</b>
                            <br>
                            <b>Net price = Original cost – GST</b>

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