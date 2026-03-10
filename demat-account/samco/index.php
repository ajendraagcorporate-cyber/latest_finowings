<?php
include("../../DLL/config.php");
include("../../DLL/functions.php");
$short_desc = getaboutMukulShort();
$desc = getaboutMukul();
$pic = getmukulImage();
$vmv = getVision(); 
$finowings = getFinowings();
$fi = mysqli_fetch_array($finowings);
$fi_title = $fi['title'];
$fi_short = $fi['short_desc'];
$fi_desc = $fi['descr'];
$fi_pic = $fi['image1'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAMCO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
	
	<!--Bootstrap code-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!--Bootstrap code-->

	

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
	<!-- Navbar End -->


    <!-- About Mukul Agrawal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!--<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-90 h-90" src="../../admin/media/<?php echo $fi_pic; ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>-->
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">How To Open a Demat Account with</h6>
                    <h1 class="mb-4">SAMCO</h1>
<p dir="ltr"><strong>Samco Securities</strong> is one of India's major investment technology businesses, offering a wide range of properties for trading and investing, including equities, equity derivatives, currency derivatives, commodities, mutual funds, and IPOs.</p>
<p dir="ltr">Samco, formed in 2015, is known for its ultra-low brokerage fees, unique margin solutions, and free trading software. Samco is particularly known for its StockBasket feature, which allows you to invest in an expert-selected basket of companies based on 25+ stock rating characteristics. Mr. Jimeet Modi, the Samco Group's Founder and CEO, established the company.</p>
<p dir="ltr">.If you&rsquo;re looking at the benefits you would get opening a Demat Account in Samco then the below section will answer it.</p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">In the below section, we have discussed the benefits of opening a Demat account with Samco.</p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Free trading and Demat account registration.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Trade with a ZERO amount of cash as a margin against shares.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The first year's Demat AMC is zero.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">For the first month, receive a 100% brokerage rebate.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">You will have exclusive access to the StockBasket tool.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The next-generation Samco trading software</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">advanced futures and options trading</p>
</li>
</ul>
<p>&nbsp;</p>
<p dir="ltr"><a href="../samcoctr-clicks.php" target="_blank" rel="noopener"><strong><span style="color: rgb(224, 62, 45);">Click Here</span> to open a Demat Account with Samco and start making investments today.&nbsp;</strong></a></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">To trade online with Samco, the investor must first open an account.</p>
<p dir="ltr">Samco provides customers with the option of opening an account online. It is a simple, quick, and completely paperless process. Account opening at Samco is free, and there are no maintenance fees for the first year.</p>
<p dir="ltr">&nbsp;</p>
<ul>
<li dir="ltr">To open a trading and Demat account with Samco, first download the Samco mobile app or register on the company's website.</li>
<li dir="ltr">Fill in the basic details.</li>
<li dir="ltr">Upload some copies of mandatory documents like an Aadhaar card, PAN, Bank Account details, etc.</li>
<li dir="ltr">Pay the account opening fee (if any) and complete the setup.&nbsp;</li>
</ul>
<p><strong><br><a href="../samcoctr-clicks.php" target="_blank" rel="noopener"><span style="color: rgb(224, 62, 45);">Start investing in Samco Today</span> and achieve your Financial Goals with Samco.</a></strong></p>
<p>&nbsp;</p>
            
                <h3>After Open the Account, Please Fill out the Form</h3><br />
<p align="justify" style="font-size:18px;">This form is only for those, who open a Demat account through Mukul sir's referral link of AngelOne. After filling out the form we will share the Premium Telegram Channel Link on your mail within a week. And also request you fill in all your details correctly. So that we can provide you all the benefits without any trouble.</p>
<br />
<p align="center"><a class="btn btn-primary py-3 px-5 mt-2" href="https://forms.gle/nhbBBWyPHPM6NRvx5" target="_blank">Form Link</a></p>
<p>&nbsp;</p>
<p><strong>Happy Investing !</strong></p>
                   <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#00acea; border:1px solid #00acea;">
Read More</button>-->
                </div>
            </div>
			
        </div>
    </div>
    
	

    
        

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
	
	
</body>

</html>