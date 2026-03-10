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
    <title>Upstox Free Demat Account: Start Trading & Investment Now</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="How to Open Upstox Demat Account, Upstox Demat Account, Upstox Account Opening, Upstox Demat Account Charges" name="keywords">
    <meta content="Begin trading and investing with an Upstox free Demat account. Seize this opportunity to enter the financial markets. Sign up now and embark on your investment journey with ease!" name="description">

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
                    <h6 class="section-title bg-white text-start text-primary pe-3">Demat Account</h6>
                    <h1 class="mb-4">Upstox</h1>
					
<p class="mb-4" align="justify">Upstox is a leading online stockbroker that offers a variety of investment products, including stocks, bonds, mutual funds, and ETFs. Upstox also offers a free demat account, which allows you to buy and sell securities electronically.</p>
<p class="mb-4" align="justify">Opening a demat account with Upstox is easy and convenient. You can do it online in just a few minutes. All you need is aadhaar card, pan card, and bank account details.</a>
<p class="mb-4" align="justify">Once you have opened your demat account, you can start investing in the stock market. You can buy and sell securities through Upstox' intuitive and user-friendly trading platform.</a>

<p class="mb-4" align="justify">Upstox offers a variety of features and benefits, including:</p>
<ul>
<li>Free demat account: Upstox offers a free demat account, which allows you to buy and sell securities electronically.</li>
<li>Low trading fees: Upstox offers low trading fees, which means you can save money on your investments.</li>
<li>Award-winning trading platform: Upstox' trading platform has been awarded the "Best Trading Platform" by several industry publications.</li>
<li>24/7 customer support: Upstox offers 24/7 customer support, so you can get help when you need it.</li>
<li>Zero commission* on Mutual Funds and IPO</li>
<li>Rs.20* per order on Equity, F&O, Commodity and Currency</li>
</ul>
<p>&nbsp;</p>
<p><a href="https://www.finowings.com/upstoxclicks.php" target="_blank" style="color:red; font-weight:bold;">Click Here</a> to Open Demat Account with Upstox and Start Investing Today.</p>
<p>&nbsp;</p>
<p class="mb-4" align="justify">If you're looking for a convenient and affordable way to invest in the stock market, Upstox is the perfect choice for you. Open a demat account today and start investing!</p>

<p class="mb-4" align="justify">Open a demat account with Upstox today and start investing! With Upstox, you can buy and sell securities easily and securely. Start investing today and reach your financial goals sooner.</p>

<h2>Benefits of opening a demat account with Upstox:</h2>
<ul>
<li>Free demat account: Upstox offers a free demat account, which allows you to buy and sell securities electronically.</li>
<li>Low trading fees: Upstox offers low trading fees, which means you can save money on your investments.</li>
<li>Award-winning trading platform: Upstox' trading platform has been awarded the "Best Trading Platform" by several industry publications.</li>
<li>24/7 customer support: Upstox offers 24/7 customer support, so you can get help when you need it.</li>
</ul>
<p>&nbsp;</p>
<h3>How to open a demat account with Upstox:</h3>
<p class="mb-4" align="justify">Visit <a href="https://www.finowings.com/upstoxclicks.php" target="_blank" style="font-weight:bold; color:#273158;">Upstox' website</a> and click on the "Open Account" button.<br />
Enter your personal information, including your name, address, and contact details.<br />
Upload a copy of your aadhaar card, pan card, and bank account details.<br />
Pay the account opening fee.<br />
Your demat account will be opened within a few days. after you open your demat account fill the form to get fill the form to get exclusive access to channel with stock market tips and info.
</p>
<p class="mb-4">Start investing today with <a href="https://www.finowings.com/upstoxclicks.php" target="_blank" style="font-weight:bold; color:red;">Upstox!</a></p>
<p>&nbsp;</p>
		                <h3>After Open the Account, Please Fill out the Form</h3><br />
<p align="justify" style="font-size:18px;">This form is only for those, who open a Demat account through Mukul sir's referral link of Zerodha, Upstox, AngelOne, and Alice Blue. After filling out the form we will share the Premium Telegram Channel Link on your mail within a week. And also request you fill in all your details correctly.</p>
<p>&nbsp;</p>
<p align="center"><a class="btn btn-primary py-3 px-5 mt-2" href="https://forms.gle/nhbBBWyPHPM6NRvx5" target="_blank">Form Link</a></p>			
					
					

					
					 
                   <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#00acea; border:1px solid #00acea;">
Read More</button>-->
                </div>
            </div>
			
        </div>
    </div>
    
	<!--Pop Up box start-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">About Finowings</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php echo $fi_desc; ?> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<!--Pop Up box end-->

	<!--Pop Up box start-->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">About Mukul Agrawal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php echo $desc; ?> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<!--Pop Up box end-->
	
<!-- About Finowings End -->


    
        

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