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
    <title>Alice Blue Demat Account Opening: Start Trading Now</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Alice Blue Demat Account Opening, alice blue amc charges, alice blue demat account opening charges, Free demat account " name="keywords">
    <meta content="Start trading with an Alice Blue Demat account. Seamlessly open your account today and dive into the world of trading opportunities. Join now to kickstart your trading journey!" name="description">

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
                    <h1 class="mb-4">Alice Blue</h1>
<p class="mb-4" align="justify">Alice Blue is a leading online investment platform that makes it easy to open a demat account and start investing. With Alice Blue, you can buy and sell stocks, bonds, mutual funds, and other investment products online, with no minimum investment required.</p>

<p class="mb-4" align="justify">Here are some of the benefits of opening a demat account with Alice Blue:</p>
<ul>
<li><strong>Easy to open:</strong> The account opening process is quick and easy, and you can do it all online.</li>
<li><strong>No minimum investment:</strong> There is no minimum investment required to open a demat account with Alice Blue.</li>
<li><strong>Low fees:</strong> Alice Blue offers low fees, so you can save money on your investments.</li>
<li><strong>Wide range of Investment Products:</strong> Alice Blue offers a wide range of investment products, so you can find the right ones for your needs.</li>
<li><strong>24/7 customer support:</strong> Alice Blue offers 24/7 customer support, so you can get help whenever you need it.</li>
</ul>
<p>&nbsp;</p>
<p><a href="https://www.finowings.com/aliceblueclicks.php" target="_blank" style="color:red; font-weight:bold;">Click Here</a> to Open Demat Account with Alice Blue and Start Investing Today.</p>
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