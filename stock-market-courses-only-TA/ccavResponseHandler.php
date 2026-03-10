<?php include('Crypto.php')?>
<?php

	error_reporting(0);
	
	$workingKey='06811CCB278125B242D4F38493891149';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	//echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
		//echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		
	}
	else if($order_status==="Aborted")
	{
		//echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		//echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		//echo "<br>Security Error. Illegal access detected";
	
	}

	//echo "<br><br>";

	//echo "<table cellspacing=4 cellpadding=4>";
	//for($i = 0; $i < $dataSize; $i++) 
	//{
		//$information=explode('=',$decryptValues[$i]);
	    //echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
	//}

	//echo "</table><br>";
	//echo "</center>";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mukul Agrawal Courses</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

	
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '979838673727730'); // Your Pixel ID
fbq('track', 'PageView');
</script>

<?php
  // Assuming you receive the price like this from ccavenue response
  //$amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;
  for($i = 0; $i < $dataSize; $i++) 
			{
			$information=explode('=',$decryptValues[$i]);
			if($i==10)
		 	$amount = urldecode($information[1]);
			}
  
?>

<script>
fbq('track', 'Purchase', {
  value: <?php echo $amount; ?>,
  currency: 'INR'
});
</script>

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=979838673727730&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

</head>

<body>
     <section class="banner">
        <div class="container">
		 <div class="header-logo"><a href="https://www.mukulagrawal.com/"><img src="assets/images/banner/ma-logo1.png" ></a></div>
            <div class="row">
                <!-- IMAGE: Mobile me pehle, Desktop me baad me -->
                <div class="col-md-8 order-1 order-md-2">
                    <div class="content-img">
                        <img src="assets/images/banner/banner.jpg" width="100%" alt="banner-content">
                    </div>
                </div>
    
                <!-- TEXT: Mobile me baad me, Desktop me pehle -->
                <div class="col-md-4 d-flex align-items-center order-2 order-md-1">
                    <div class="content">
                        <h3>Learn & maximize your profits with Mukul Agrawal. 
    </h3>
                        <p>Courses start at Rs 799 only</p>

                        <a href="#courses" class="btn">Invest with the right knowledge</a>
                       <!-- <p>
                            <a href="#">Join Community</a>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

	
	  <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Purchase Summary</h1>
            </div>
			<div align="center" style="font-size:18px; color:#273158;">
<?php			
          if($order_status==="Success")
	{
		echo "<br>Congratulations !! You have completed your Payment successfully. You will get Call from our executive for further process.";
		
	}
	else if($order_status==="Aborted")
	{
		echo "<br>We will keep you posted regarding the status of your order through E-Mail. You can also contact with your Coordinator.";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br>The transaction has been declined due to any Reason associated with choosen Payment Method or Bank. You can try again after some time. Thank You.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";
	
	echo "<table cellspacing=4 cellpadding=4>";
			for($i = 0; $i < $dataSize; $i++) 
			{
			$information=explode('=',$decryptValues[$i]);
			if($i==0)
		 	echo '<tr><td>Order ID</td><td>'.urldecode($information[1]).'</td></tr>';
		    if($i==1)
		 	echo '<tr style="background-color: rgb(233, 249, 255) !important;"><td>Tracking ID</td><td>'.urldecode($information[1]).'</td></tr>';
		    if($i==2)
		 	echo '<tr><td>Bank Reference Number</td><td>'.urldecode($information[1]).'</td></tr>';
		    if($i==3)
		 	echo '<tr style="background-color: rgb(233, 249, 255) !important;"><td>Order Status</td><td>'.urldecode($information[1]).'</td></tr>';
		    if($i==5)
		 	echo '<tr><td>Payment Mode</td><td>'.urldecode($information[1]).'</td></tr>';
            if($i==8)
		 	echo '<tr style="background-color: rgb(233, 249, 255) !important;"><td>Status Message</td><td>'.urldecode($information[1]).'</td></tr>';
            if($i==10)
		 	echo '<tr><td>Amount</td><td>'.urldecode($information[1]).'</td></tr>';
            if($i==11)
		 	echo '<tr style="background-color: rgb(233, 249, 255) !important;"><td>Billing Name </td><td>'.urldecode($information[1]).'</td></tr>';
            if($i==12)
		 	echo '<tr><td>Billing Address </td><td>'.urldecode($information[1]).'</td></tr>';		
		    if($i==13)
		 	echo '<tr style="background-color: rgb(233, 249, 255) !important;"><td>Billing City </td><td>'.urldecode($information[1]).'</td></tr>';
		    if($i==14)
		 	echo '<tr style="background-color: rgb(233, 249, 255) !important;"><td>Billing State </td><td>'.urldecode($information[1]).'</td></tr>';
		    if($i==17)
		 	echo '<tr><td>Contact No. </td><td>'.urldecode($information[1]).'</td></tr>';
		    if($i==18)
		 	echo '<tr style="background-color: rgb(233, 249, 255) !important;"><td>Email ID </td><td>'.urldecode($information[1]).'</td></tr>';
		    if($i==40)
		 	echo '<tr><td>Transaction Date </td><td>'.urldecode($information[1]).'</td></tr>';
			}

	   echo "</table><br>";
	   echo "</center>";
?>	
        </div>
    </div>
    <!-- Courses End -->
</div>	
	
	

	

        

    <!-- Footer Start -->
    <?php include("footer.php"); ?> 
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>


