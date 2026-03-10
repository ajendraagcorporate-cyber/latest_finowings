<?php
include("../../../DLL/config.php");
include("../../../DLL/functions.php");
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
    <title>Incred Personal Loan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Angel Broking Account Opening, Angel One Demat Account, Zero Brokerage Charges, Free Demat Account, Opening A demat account, Best Demat Account" name="keywords">
    <meta content="Explore hassle-free Angel Broking account opening with zero brokerage fees.Open unlimited trading opportunities with our user-friendly platform. Join now for a seamless investing experience!" name="description">

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
    <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../../css/style.css" rel="stylesheet">
	
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
    <?php include("../../../top-navigation.php"); ?>
	<!-- Navbar End -->


    <!-- About Mukul Agrawal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!--<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-90 h-90" src="../../../admin/media/<?php echo $fi_pic; ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>-->
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Personal Loan</h6>
                    <h1 class="mb-4">InCred Personal Loan: Your Path to Financial Freedom</h1>
					<p class="mb-4" align="justify">InCred Personal Loan is financial solutions should be quick, convenient, and entirely digital.</p>
					<div align="center"><a href="https://sales.gromo.in/b/INCRED/?token=fUcH6NT1ZXcOXLib8y3KoiTGo97Ry%2B%2Frpk7x2cd55F1b%2FasMPBqZHZ7yFgaV7%2FPkKDtOBct9FwZvwGEssAVmgcq5DlouxewrL8gBO4KmH%2BYhsW1vmmERmWrD%2F9J2w%2FrF&versionCode=null&versionCode=null" target="_blank" class="btn btn-primary py-3 px-5 mt-2">Click Here For Instant Apply</a>.</div><br />
					<div align="center"><img src="incred-personal-loan.jpeg" style="width:100%" /></div>
					<br />
					<h2>InCred Personal Loans to offer you the following features and benefits:</h2>
					<br />
					<h3>Loan Features:</h3>
					<br />
					<p class="mb-4" align="justify"><strong>1. Quick Processing:</strong><br />
When you're in need of funds, time is of the essence. At Finowings, we've streamlined our loan approval process to ensure you get your money when you need it the most. Our quick processing means you can count on us to be there in your time of need.</p>

<p class="mb-4" align="justify"><strong>2. Convenience Guaranteed:</strong><br />
Gone are the days of complicated loan applications. We've prioritized your convenience, so you can expect a hassle-free borrowing experience. Say goodbye to mountains of paperwork and say hello to a user-friendly application process that saves you time and energy.</p>

<p class="mb-4" align="justify"><strong>3. Completely Digital:</strong><br />
In today's digital age, there's no need to visit a bank branch or wait in long queues. With Finowings, you can apply for a personal loan entirely online. Our digital platform ensures you have access to our services 24/7, from the comfort of your own home.</p>

<p class="mb-4" align="justify"><strong>4. Pay For What You Borrow:</strong><br />
Transparency is at the core of our lending philosophy. With Incred Personal Loans, you'll only pay interest on the amount you borrow. This feature ensures that your monthly repayments remain manageable, helping you stay in control of your finances.</p>

<p><strong><a href="https://www.finowings.com/financial-calculators/emi-calculator/" target="_blank" style="font-weight:bold; color:red;">Click Here</a> to Calculate Your Repayment Amount with EMI Calculator</strong></p>
<p>&nbsp;</p>
<h2>Loan Eligibility Criteria and Documents:</h2>
<p class="mb-4" align="justify">To qualify for a InCred Personal Loan Personal Loan, you'll need to meet the following eligibility criteria and provide the necessary documents:</p>

<h3>Eligibility Criteria:</h3>
<ul>
<li>You must be a resident of India.</li>
<li>Your age should be between 21 and 55 years.</li>
<li>A minimum monthly income of Rs. 15,000 is required.</li>
</ul>

<h3>Documents Required:</h3>
<ul>
<li>PAN Card</li>
<li>Any government-issued ID proof (Aadhaar card, Voter ID, Driver's license, or valid passport)</li>
<li>Last 3 months' bank statements</li>
</ul>
<p>&nbsp;</p>
<p><strong><a href="https://sales.gromo.in/b/INCRED/?token=fUcH6NT1ZXcOXLib8y3KoiTGo97Ry%2B%2Frpk7x2cd55F1b%2FasMPBqZHZ7yFgaV7%2FPkKDtOBct9FwZvwGEssAVmgcq5DlouxewrL8gBO4KmH%2BYhsW1vmmERmWrD%2F9J2w%2FrF&versionCode=null&versionCode=null" style="font-weight:bold; color:red;" target="_blank">Apply for Your Personal Loan Today!</a></strong></p>
<p>&nbsp;</p>
<p class="mb-4" align="justify"><i>Are you ready to take control of your financial future? With InCred Personal Loan, you can secure the funds you need to accomplish your goals. Our quick and convenient personal loans are just a few clicks away. Don't let financial constraints hold you back any longer - apply now!</i></p>

<p class="mb-4" align="justify"><strong>Experience financial freedom with InCred Personal Loan. Apply for your personal loan today with <a href="https://sales.gromo.in/b/INCRED/?token=fUcH6NT1ZXcOXLib8y3KoiTGo97Ry%2B%2Frpk7x2cd55F1b%2FasMPBqZHZ7yFgaV7%2FPkKDtOBct9FwZvwGEssAVmgcq5DlouxewrL8gBO4KmH%2BYhsW1vmmERmWrD%2F9J2w%2FrF&versionCode=null&versionCode=null" target="_blank" style="font-weight:bold; color:red;">Our Link</a> and Engage a new  world of opportunities.</strong></p>

<p>&nbsp;</p>
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
 <?php include("../../../footer.php"); ?>
    <!-- Footer End -->


    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lib/wow/wow.min.js"></script>
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../../js/main.js"></script>
	
	
</body>

</html>