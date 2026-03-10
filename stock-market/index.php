<?php
   if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
   ob_start('ob_gzhandler');
   else ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Zero to Hero Stock Market Course (Live) by Mukul Agrawal</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
	
<style>
.container {
  position: relative;
  overflow: hidden;
  width: 100%;
 }

/* Then style the iframe to fit in the container div with full height and width */
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
}

/* Add rounded corners to the top left and the top right corner of the image */
img {
  border-radius: 5px 5px 0 0;
}

.feedback {
  background-color : #000000;
  color: #ffbd50;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #ffbd50;
  font-weight: bold;
}

#mybutton {
  position: fixed;
  bottom: -4px;
  right: 10px;
}

</style>	
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
   
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/finowings-logo.png" alt="alternative"></a> 
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#register" style="font-size:20px;">Book Your Seat Now <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link page-scroll" href="#description">DETAILS</a>
                </li>

                <!-- Dropdown Menu --> 
                <!--				
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DATE</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!--<li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT US</a>
                </li>-->
            </ul>
            <!--<span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/themukulagrawal" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.twitter.com/themukulagrawal" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
				   
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/themukulagrawal" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/in/themukulagrawal/" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
						<span class="fa-stack">
                            <a href="https://www.youtube.com/@MukulAgrawal" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
            </span>-->
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="countdown">
                            <span id="clock"></span>
                        </div>
                        <h1>ZERO TO HERO STOCK MARKET CLASS</h1>
						<p class="p-large"><b><span style="color:#ffbd50;">Price Action</span> | <span style="color: #FFFFFF;">Trading Journal</span> | <span style="color:#ffbd50;">Intraday Master Strategies</span> | <span style="color:#FFFFFF;">BTST & STBT Strategy</span></b></p>
					    <p class="p-large">This class is Specially Designed for Businessmen, Job Persons, Students and Housewives.</p>
                        <a class="btn-solid-lg page-scroll" href="#register">Book Your Seat Now</a>
                        <!--<a class="btn-outline-lg page-scroll" href="#instructor">DISCOVER</a>-->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
			
			<div style="width:100%; height:100%; padding-top:30px;">
		<iframe width="100%" height="400" src="https://www.youtube.com/embed/yeXm4Rp0Tqs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
			
			
        </div> <!-- end of container -->

</header> <!-- end of header -->
		
		
		
		
        
    
    <!-- end of header -->

		
		

    <!-- Registration -->
    <div id="register" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Have any Query ?</h2>
                        <p>Just fill out the form and click submit. One of our Executive will Contact You.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Your information</strong> is required to get in touch with you.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>It's safe with us</strong> and will not be used for marketing.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>You will get</strong> a response within 24 hours.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Registration Form -->
                    <div class="form-container">
                        <form action="addinfo.php">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="rname" required>
                                <label class="label-control" for="rname">Complete name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="remail" required>
                                <label class="label-control" for="remail">Email address</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                                <label class="label-control" for="rphone">Phone number</label>
                                <div class="help-block with-errors"></div>
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control-input" id="rcity" name="rcity" required>
                                <label class="label-control" for="rcity">City</label>
                                <div class="help-block with-errors"></div>
                            </div>
							<!--<div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>I've read and agree to written <a href="https://www.finowings.com/privacy-policy.php" target="_blank">Privacy Policy</a> and <a href="https://www.finowings.com/terms.php" target="_blank">Terms & Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>-->
							<br />
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Book Your Seat Now</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of registration form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->


    <!-- Partners -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>FEATURED IN</h3>
                     <br />
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/Business-Standard.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/Deccan-Herald.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/fff.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/Hindustan-Times.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/mid-day.png" alt="alternative">
                                </div>
                                <div class="swiper-slide">
                                        <img class="img-fluid" src="images/open-news.png" alt="alternative">
                                </div>
								<div class="swiper-slide">
                                        <img class="img-fluid" src="images/Thrive-Global.png" alt="alternative">
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of partners -->


    <!-- Instructor -->
    <div id="instructor" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/mukul-agrawal-01.jpg" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Know Your Trainer ?</h2>
                        <p>Dr. Mukul Agrawal:</p>
						
						<ul style="line-height:35px;">
<li>Investor and Trader from Last 19 Years.</li>						
<li>Guinness Book Record Holder for the Largest Financial Investment Lessons.</li>
<li>Best Selling Author for "The Simplest Book for Technical Analysis."</li>
<li>TEDx Speaker.</li>
<li>Trainer with over 2 decades of experience in the financial industry.</li>
<li>Founder of Finowings, a financial training and consulting firm.</li>
<li>YouTube channel with over 1.3 million subscribers.</li>
<li>Expertise in financial investment, technical analysis, and risk management.</li>
<li>Passionate about helping people achieve financial freedom and success.</li>
<li>Expertise in specific technical analysis tools and Familiarity with different trading strategies</li>
<!--<li>Understanding of risk management and Ability to teach in various formats</li>-->
</ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
<p align="center"><img src="images/mukul-agrawal-social-media.png" width="100%" /></p>			
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of instructor -->
<div align="center" style="background-color:#fbf9f5;"><a class="btn-solid-lg page-scroll" href="#register">Book Your Seat Now</a></div>

   <!-- Description -->
    <div id="description" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>What Will You Learn In <br /> Zero To Hero Stock Market Class</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg first">
                        <li class="media">
                            <i class="bullet">1</i>
                            <div class="media-body">
                                <h4>Basic to Advance Technical Analysis</h4>
                                <p>You will learn all the topics of technical analysis basic to advance. This class will cover Intraday/Swing and cash, future, and options.</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">2</i>
                            <div class="media-body">
                                <h4>Pin-Point and Advance Prediction</h4>
                                <p>In this class we will teach you mainly How to find best stocks in advance for intraday and swing. You will also learn Entry & exit point and SL and Targets.</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">3</i>
                            <div class="media-body">
                                <h4>Mentorship Program service</h4>
                                <p>In this mentorsip Program we will provide you a Guide for 3 month after classes. who help you and guide you if you face any difficulty in stock market.</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg second">
                        <li class="media">
                            <i class="bullet">4</i>
                            <div class="media-body">
                                <h4>Trading Journal</h4>
                                <p>During the Class, We will provide a Trading Journal that will help you in improving your trading and minimize your mistakes.</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">5</i>
                            <div class="media-body">
                                <h4>Screener & Intraday Strategies</h4>
                                <p>We will provide you the Best Screener Strategies that will help you to find out best Intraday stocks in 5 minutes.</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">6</i>
                            <div class="media-body">
                                <h4>Revision Session</h4>
                                <p>During classes and after classes we will provide you 2 or 3 Revision sessions So that if you have any confusion in any topics, then you can clear it in the revision session.</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
		<div align="center" style="background-color:#fbf9f5;"><a class="btn-solid-lg page-scroll" href="#register">Book Your Seat Now</a></div>
    </div> <!-- end of basic-2 -->
    <!-- end of description -->



    <!-- Students -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Who Should Attend The Zero To Hero Stock Market Class</h2>
                        <ul style="line-height:35px;">
						<li>Anyone can learn how to trade.</li>
                        <li>Businessmen or Working professionals who don't have time to track and trade the market can also trade in just 1 hour.</li>
                        <li>House Wifes who are not willing to move out of the house to earn can also learn to trade and can earn.</li>
                        <li>With hand-holding support, retired men can also learn how to earn from the stock market. </li>
						<li>Those who want to be full-time traders can learn from basic to advance technical analysis.</li>
						<li>Students who want to pursue their careers in the stock market.</li>
						<li>Anyone who wants to be financially Independent.</li>
						</ul>
                        <!--<a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">LIGHTBOX</a>-->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/students.jpeg" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of students -->

<div align="center" style="background-color:#fbf9f5;"><a class="btn-solid-lg page-scroll" href="#register">Book Your Seat Now</a></div>

    <!-- Details Lightbox -->
	<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>SEO Training Course</h3>
                    <hr>
                    <h5>For everybody</h5>
                    <p>The training course is dedicates to anyone passionate about the web and in need of improving their current online presence.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Link building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Know your current position</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Partnering with blogs</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Naming your images</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Creating good sitemaps</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Writing for humans</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#register">SIGN UP</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox -->


    <!-- Video -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>What our students are saying</h2>

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=Lnw6qy7jrhg" data-effect="fadeIn">
                                <img class="img-fluid" src="images/feedback.jpg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

<div align="center" style="background-color:#fbf9f5;"><a class="btn-solid-lg page-scroll" href="#register">Book Your Seat Now</a></div>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of video -->


    


    <!-- Newsletter -->
    <!--<div class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Stay updated by subscribing to our Social Media Channels</h3>
                    
                  

                    <!-- Social Links -->
                    <!--<div class="icon-container">
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/themukulagrawal" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.twitter.com/themukulagrawal" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                       
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/themukulagrawal" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/in/themukulagrawal/" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
						<span class="fa-stack">
                            <a href="https://www.youtube.com/@MukulAgrawal" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of icon-container -->
                    <!-- end of social icons -->

                <!--</div> <!-- end of col -->
            <!--</div> <!-- end of row -->
        <!--</div> <!-- end of container -->
    <!--</div> <!-- end of form-2 -->
    <!-- end of newsletter -->
	


    <!-- Contact -->
	<section id="contact">
    <div id="contact" class="form-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Contact Details</h2>
                        <p>Feel free to get in touch with us.</p>
                        <h3>Main Office Location</h3>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">C-1, Bank of Baroda, Sector-M, Mama Chauraha, <br />Kursi Road, Lucknow</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="media-body"><b>+91-970-809-4321</b></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="light-gray" href="mailto:info@finowings.com">info@finowings.com</a></div>
							</li>
							<li class="media">
								<i class="fas fa-globe"></i>
								<div class="media-body"><a class="light-gray" href="https://www.finowings.com/" target="_blank">www.finowings.com</a></div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                
               <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.7344338188946!2d80.95389281547068!3d26.88017726796012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdaf218e1115%3A0x4a5fcfe97266b5ac!2sFinowings%20Training%20Academy%20Private%20Limited!5e0!3m2!1sen!2sin!4v1676696479661!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-3 -->
	</section>
    <!-- end of contact -->

<div id="mybutton">
<a href="#register"><button class="feedback">Book Your Seat Now</button></a>
</div>

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2023 <a href="https://www.finowings.com" target="_blank">Finowings Training Academy Pvt. Ltd.</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-260663856-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-260663856-1');
</script>
</body>
</html>