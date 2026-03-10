<?php
include("../DLL/config.php");
include("../DLL/functions.php");
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
    <title>Financial Freedom Conclave 2022 - Finowings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Financial Freedom Conclave 2022 by Finowings. Gain insights from experts on achieving financial independence. Unlock your success today" name="description">

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
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
	
	<!-- Button Styles -->
	<style>
		.btn-primary {
			border-radius: 50px;
			transition: all 0.3s ease;
		}
		
		.btn-primary:hover {
			transform: translateY(-2px);
			box-shadow: 0 5px 15px rgba(0,0,0,0.2);
		}
	</style>
	
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
    <!-- Navbar Start -->
    <?php include("../top-navigation.php"); ?>
    <!-- Navbar End -->
    <!-- Navbar End -->


    <!-- About Mukul Agrawal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="../img/ffc1.png" alt="Finowings Financial Freedom Conclave 2022" style="object-fit: cover;">
				    </div>
					
				
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Event</h6>
                    <h1 class="mb-4">Financial Freedom Conclave 2022</h1>
					
					
                    <p class="mb-4" align="justify"><strong>Guinness World Record made in Lucknow, U.P. in The Financial Freedom Conclave 2022 by Mr. Mukul Agrawal</strong><br /><br />
On 11th Dec 2022, Mukul Agrawal, founder of Finowings, organized a Financial Freedom Conclave in Lucknow. More than 2000 audiences from across India showed love by joining the conclave. And by this, Mr. Mukul Agrawal made a Guinness World Record for organizing the Largest Financial Investment Lesson in Lucknow, UP.<br /><br />

Mr. Mukul Agrawal is a man with big dreams. Right after school, he started preparing hard to get a seat in MBBS, but despite trying two times, he didn't get it through. At this moment, when he was disappointed and clueless about what his next steps should be, he came across the stock market. <br /><br />

He tried his hand at something completely new, a field he had no experience in. But since it was the first thing that piqued his interest and curiosity, he spent hours learning about how it works, the mechanisms of making profits, and understanding why so many people make huge losses they can't recover in the stock market!
</p>
                    
		<p>In this event, the audience learned:</p>
					<div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>How to be Financially Literate.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>How to be Financially Independent.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>How to be a full-time trader.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Regular Income from Option Strategy.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Understand the secret of investing.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Financial Knowledge under One Roof.</p>
                        </div>
                    </div>
					
					 <button type="button" class="btn btn-primary py-3 px-5 mt-2" data-toggle="modal" data-target="#myModal" aria-label="Read more about Financial Freedom Conclave 2022">Read More</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary py-3 px-5 mt-2" href="gallery.php" aria-label="View gallery of Financial Freedom Conclave 2022">Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary py-3 px-5 mt-2" href="media-coverage.php" aria-label="View media coverage of Financial Freedom Conclave 2022">Media Coverage</a>
					 
                   <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#00acea; border:1px solid #00acea;">
Read More</button>-->
                </div>
            </div>
			
		
			
        </div>
		
			<!--<div align="left" style="padding-left:5%; padding-top:2%;"><a class="btn btn-primary py-3 px-5 mt-2">Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary py-3 px-5 mt-2">Media</a></div>-->
					
			
    </div>
    
	<!--Pop Up box start-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="conclaveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="conclaveModalLabel">Financial Freedom Conclave 2022</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p class="mb-4" align="justify"><strong>Guinness World Record made in Lucknow, U.P. in The Financial Freedom Conclave 2022 by Mr. Mukul Agrawal</strong><br /><br />
On 11th Dec 2022, Mukul Agrawal, founder of Finowings, organized a Financial Freedom Conclave in Lucknow. More than 2000 audiences from across India showed love by joining the conclave. And by this, Mr. Mukul Agrawal made a Guinness World Record for organizing the Largest Financial Investment Lesson in Lucknow, UP.<br /><br />

In an event, the audience learned:
<ul>
<li>How to be Financially Literate.</li>
<li>How to be Financially Independent.</li>
<li>How to be a full-time trader.</li>
<li>How to generate regular income through option strategy.</li>
<li>Understand the secret of investing and many more.</li>
</ul>
<br />
Mr. Mukul Agrawal is a man with big dreams. Right after school, he started preparing hard to get a seat in MBBS, but despite trying two times, he didn't get it through. At this moment, when he was disappointed and clueless about what his next steps should be, he came across the stock market. <br /><br />

He tried his hand at something completely new, a field he had no experience in. But since it was the first thing that piqued his interest and curiosity, he spent hours learning about how it works, the mechanisms of making profits, and understanding why so many people make huge losses they can't recover in the stock market!<br /><br />

All the hours he put into understanding the stock market seem to have paid off. He started his entrepreneurial journey almost 18 years back when he decided to turn his passion into a profession. Today, he has made a loyal community of over 1.28 million people on YouTube with a curious mind and hunger to educate themselves. His work in the field of finance has been recognized with several prestigious accolades over the years. He has been invited to TEDx, Josh Talks, and SRCC. Business Conclave 2022. Several news stories, including Business Standard, Hindustan Times, and Thrive Global, have featured him. <br /><br />

He founded Agrawal Corporate and Finowings Training Academy to educate thousands of people about the stock market. He believes financial illiteracy is one of our country's biggest problems. Hence, He is on a mission to empower people financially by providing the right knowledge so that everyone can make money the right way!
				
					</p> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<!--Pop Up box end-->
	

	
	<!--Pop Up box start-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="mukulModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="mukulModalLabel">About Mukul Agrawal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php echo $desc; ?> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
<!--Pop Up box end-->
	
<!-- About Finowings End -->


    
        

    <!-- Footer Start -->
    <?php include("../footer.php"); ?>
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