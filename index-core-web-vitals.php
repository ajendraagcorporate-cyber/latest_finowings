<?php
session_start();
   if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
   ob_start('ob_gzhandler');
   else ob_start();
?>
<?php
include("DLL/config.php");
include("DLL/functions.php");
$freestudyintro = getfreestudyIntro();
$freestudytopic = getfreestudyTopic();
$blogs = gethomepageBlogs();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Core Web Vitals Guide – Finowings</title>

<!-- Preconnect -->
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

<!-- CRITICAL CSS INLINE -->
<style>
/* ===== CRITICAL CSS : FINOWINGS ===== */
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Arial,sans-serif;background:#fff;color:#111}
header,.navbar{min-height:60px;background:#fff}
.hero{padding:24px 16px;background:#f5f7fb}
h1{font-size:1.6rem;font-weight:700}
.btn{padding:10px 16px;background:#0052cc;color:#fff;border-radius:6px;text-decoration:none}
/* ===== END ===== */
</style>

<!-- NON-BLOCKING CSS -->
<link rel="preload" href="/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="/css/style.css" as="style" onload="this.rel='stylesheet'">
<link rel="preload" href="/assets/owl.carousel.min.css" as="style" onload="this.rel='stylesheet'">
<link rel="preload" href="/animate/animate.min.css" as="style" onload="this.rel='stylesheet'">
<link rel="preload" href="/css/fonts.css" as="style" onload="this.rel='stylesheet'">

<!-- CDN CSS -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style" onload="this.rel='stylesheet'">
<link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" as="style" onload="this.rel='stylesheet'">

<!-- Fallback -->
<noscript>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
</noscript>

</head>

</head>

	
<style type="text/css">
/* Make the image fully responsive */
.carousel-inner img{width: 100%; height: 100%;}

video {
  width: 100%;
  height: auto;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}  

.carousel-indicators li {
  background-color: #f96903 !important;
  /*list-style-image: url('../img/light-blue.png') !important;*/
}

.carousel-indicators .active {
  background-color: #273158 !important;
  /*list-style-image: url('../img/dark-blue.png') !important;*/
}


.carousel-inner .btn {
  width: 100%;	
  max-width: 150px;
  position: absolute;
  top: 75%;
  left: 26%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #00abe9;
  color: #FFFFFF;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.carousel-inner .btn a {
  width: 100%;	
  max-width: 150px;
  color: #FFFFFF; 
 text-decoration: none;
}

.carousel-inner .btn:hover {
  background-color: #436bb2;
  color: white;
}

@media (max-width: 1250px) {
.youtube-video iframe {
	  height:200px !important;
  }
} 
                      
@media (max-width: 480px) {
  .carousel-inner .btn {
    display: none;
  }
  .youtube-video iframe {
	  height:200px !important;
  }
  .course-item .btn-primary{
    padding: 0px !important;
  }
  .course-item .btn-primary a{
    font-size: 14px !important;
  }
  .course .col-sm-6{
    flex: 0 0 auto;
        width: 50% !important;
  }

  .pop-up-box h5{
    font-size: 22px !important;
     padding-top: 0px !important;
  }
  .pop-up-box h6{
    padding-top: 0px !important;
    font-size: 22px !important;
    line-height: 35px !important;
  }
  .pop-up-box #popupform .form-control {    
    border-radius: 0px !important;
    margin: 2px 0px;
    font-size: 15px !important;
  }
  .pop-up-box #popupform .btn{
    border-radius: 0px !important;
  }

}
.course-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .courses {
            padding: 20px;                               
            background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    /* Adjust the width as needed */
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
        }
        .courses img {
            max-width: 100%;
            height: auto;
}
.courses .current-price {
    font-size: 1.2em;
    color: #273158; /* Green color */
    font-weight: bold;
}

.courses .original-price {
    font-size: 0.9em;
    text-decoration: line-through;
    color: #dc3545;
}
.courses .btn{
    width: 100%;
}

        @media (max-width: 600px) {
            .course-container {
                grid-template-columns: 1fr; /* Full width on small screens */
            }
           
        }


        @media (min-width: 600px) and (max-width: 900px) {
    .course-container {
        display: grid; /* Uses a grid layout */
        grid-template-columns: repeat(2, 1fr); /* Creates 2 equal-width columns */
    }
}

       
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
    <?php include("top-navigation.php"); ?>
    <!-- Navbar Ends -->
	

<?php //include("slider.php"); ?>

  <div align="center">
  <img src="https://www.finowings.com/admin/media/technical-analysis-banner.webp"  style="width:100%;" />
  </div>
	
	<!-- Courses First Row Start -->
     <div class="container-xxl py-5">
        <div class="container">
		
		
		
		


		<!-- course Starts -->


    <section class="course mb-5">

              <div class="row g-5">
                                  <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-4">Explore Courses</h1>
            </div>

                    </div>
    <div class="course-container">

        <div class="courses">
        <img src="https://finowings.com/img/course-thumbnails/commodity.webp" alt="Stock Market Commodity Trading Master Class">
           
            <p class="fw-bold mt-3">Commodity Trading Master Class</p>
            <div class="price mb-2">
                <span class="current-price">₹1999</span>
                <span class="original-price">₹4999</span>
            </div>
           <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/16/0/recorded" target="_blank"><button class="btn btn-primary py-3 px-5 mt-0">Join Now</button></a> 
        </div>

        <div class="courses">
        <img src="https://finowings.com/img/course-thumbnails/crash-course.webp" alt="Stock Market Options Trading Course">
            
            <p class="fw-bold mt-3">Stock Market Crash Course - 6 Winning Strategies, 15 Years Proven</p>
            <div class="price mb-2">
                <span class="current-price">₹4999</span>
                <span class="original-price">₹9999</span>
            </div>
          <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/17/0/recorded" target="_blank"><button class="btn btn-primary py-3 px-5 mt-0">Join Now</button></a>  
        </div>
   
    <div class="courses">
    <img src="https://finowings.com/img/course-thumbnails/fundamental.webp" alt="Stock Market Fundamental Analysis Course">
            
            <p class="fw-bold mt-3">Complete Fundamental Analysis - Recorded</p>
            <div class="price mb-2">
                <span class="current-price">₹7,999</span>
                <span class="original-price">₹9,999</span>
            </div>
          <a href="https://courses.finowings.com/stock-market-courses-recorded-detail/complete-fundamental-analysis-course" target="_blank"><button class="btn btn-primary py-3 px-5 mt-0">Join Now</button></a>  
    </div>
        <div class="courses">
        <img src="https://finowings.com/img/course-thumbnails/options.webp" alt="Options Trading by Mukul Agrawal">
           
            <p class="fw-bold mt-3">Complete Option Trading Master - Recorded</p>
            <div class="price mb-2">
                <span class="current-price">₹4999</span>
                 <span class="original-price">₹6999</span> 
            </div>
          <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/19/0/recorded" target="_blank"><button class="btn btn-primary py-3 px-5 mt-0">Join Now</button></a>  
        </div>
        <div class="courses">
        <img src="https://finowings.com/img/course-thumbnails/special-combo.webp" alt="Stock Market Combo Courses">
            
            <p class="fw-bold mt-3">Special Combo of Fundamental Analysis, Technical Analysis and Options Trading – Recorded</p>
            <div class="price mb-2">
                <span class="current-price">₹19,999</span>
                <span class="original-price">₹22,999</span>
            </div>
        <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/46/0/combo" target="_blank"><button class="btn btn-primary py-3 px-5 mt-0">Join Now</button></a>    
        </div>
		
		    <div class="courses">
        <img src="https://finowings.com/img/course-thumbnails/traders.webp" alt="Trader's Secret Club">
            
            <p class="fw-bold mt-3">Trader’s Secret Club</p>
            <div class="price mb-2">
                <span class="current-price">Plan Starts from ₹799</span>
                <!--<span class="original-price">₹17,999</span>-->
            </div>
        <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/6/0/elite" target="_blank"><button class="btn btn-primary py-3 px-5 mt-0">Join Now</button></a>    
        </div>

		
	
    </div>

       </section>

<!-- course Ends -->

<!-- Youtube Videos Starts -->
 <section class="youtube mb-5">

<div class="row g-5">
                                  <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Videos</h6>
                <h2 class="mb-4">Latest Videos</h2>
            </div>

                    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="youtube-video">
               <iframe width="100%" height="300"  src="https://www.youtube.com/embed?list=UULFPs8w9f1gqe4BqkbI-9wTnw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="youtube-video">
           <iframe width="100%" height="300" src="https://www.youtube.com/embed?list=UULFPs8w9f1gqe4BqkbI-9wTnw&index=2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="youtube-video">
            <iframe width="100%" height="300" src="https://www.youtube.com/embed?list=UULFPs8w9f1gqe4BqkbI-9wTnw&index=3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

       </section>
<!-- Youtube Videos Ends -->


		
		
		
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Giving Wings to your Finance</h6>
                <h2 class="mb-5">Finowings Academy</h2>
            </div>
            <div class="course row g-4 justify-content-center">
			
			<?php
				while($fst = mysqli_fetch_array($freestudytopic))
				{
				$tid = $fst['id'];
				$topic = $fst['topic'];
				$alt_text = str_replace(" ","-", $topic);
				$url = strtolower("$alt_text");
				$icon = $fst['icon'];
				$i = 0.1;
			?>
			
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="bg-light">
                        <div class="position-relative overflow-hidden">
						
						
                            <a href="<?php echo $url; ?>/"><img class="img-fluid" src="admin/media/courseicons/<?php echo $icon; ?>" alt="<?php echo $topic; ?>"></a>
                            <div class="w-100 d-flex justify-content-left position-absolute bottom-0 start-0 mb-4">
                                <!--<a href="chapters.php?t=<?php //echo $tid; ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>-->
                                 <!--<a href="chapters.php?t=<?php //echo $tid; ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Read More</a>-->
                            </div>
                        </div>
						<?php
						//if($_SESSION['userinfo'] != '')
						//{	
						?>
						
                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;" onclick="location.href='<?php echo $url; ?>/';">
                            <a href="<?php echo $url; ?>/" style="font-size:16px; color:#FFFFFF; text-decoration:none;"><?php echo $topic; ?></a>
                        </div>
						<?php
						//}
						//else
						//{	
						?>
						<!--<div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;" onclick="location.href='Login/';">
                            <a href="Login/" style="font-size:16px; color:#FFFFFF; text-decoration:none;"><?php //echo $topic; ?></a>
                        </div>-->
						<?php
						//}
						?>
                        
                    </div>
                </div>
				<?php
				$i = $i+0.2;
				}
				?>
				
                
				
            </div>
        </div>
    </div>
    <!-- Courses First Row End -->

	
	
	  <!--Category Related Blogs Start-->
<div>
        <div class="container py-5">
			<div class="text-center">
				<h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
                <h2 class="mb-5">Recent Blogs</h2>
			</div>	
			   
<div class="row py-2">

<?php
	while ($row = mysqli_fetch_array($blogs)) 
	{
	$id = 	$row['id'];
	$title = $row['title'];
	$count = strlen("$title");
	$short_title = substr($title, 0, 30);
	$short_desc = $row['short_desc'];
	$short_desc1 = substr($short_desc, 0, 120);
	$desc = $row['content'];
	$pic = $row['file'];
	$imgn = explode(".", $pic);
    $imgname = $imgn['0'];
	$updated_date = $row['updated_date'];
	$cat = $row['cat_id'];
	$cat_name = getCategoryName($cat);
	$cat_names = str_replace(" ","-",$cat_name);
	if($cat_names == 'SME-IPO')
	{
	$cat_name1 = 'IPO';	
    }		
	else
	{
	$cat_name1 = $cat_names;	
	}	
	$updated_date = $row['created_date'];
	$datetime = explode(" ", $updated_date);
	$date = $datetime['0'];
	$date1 = explode("-", $date);
	$year = $date1['0'];
	$month = $date1['1'];
	$day = $date1['2'];	
	$img_alttag = $row['img_alttag'];
	$blog_url = $row['blog_url'];
?>		
<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
<div class="trading-blogs-box">
<img src="../admin/media/<?php echo $pic; ?>" alt="<?php if($img_alttag != '') { echo $img_alttag; } else { echo $imgname; }  ?>" class="img-fluid mx-auto d-block">
<!--<img src="img/dummy.jpg" class="img-fluid mx-auto d-block">-->
<p style="font-size:14px;"><a href="../<?php echo $cat_name1; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>- <?php echo $year; ?></p>
<?php
if ($count < 31)
{
?>
<h3 style="font-size:22px; font-weight:bold;"><?php echo $short_title; ?></h3>
<?php
}
else
{
?>
<h3 style="font-size:22px; font-weight:bold;"><?php echo $short_title; ?>...</h3>
<?php
}
?>
<p> <?php echo $short_desc1; ?>...</p>

<!--<a href="blog-topic.php?i=<?php //echo $id; ?>" class="btn btn-info btn-block" style="font-size:16px;">Continue Reading</a>-->
 <a class="btn btn-primary py-3 px-5 mt-2" href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>">Continue Reading</a>
</div>
</div>
<?php
 }
?>

</div>
</div>
</div>
<!--Category Related Blogs end-->

	
	<!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h2 class="mb-5">Learn with Expert</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h5>Get In Touch</h5>
                    <p class="mb-4" align="justify">Feel free to get in touch with us. Send us the query or comment and we will get back to you within one Business day.<br /><br />
We are here to help you. Please contact us on...</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; color: #cf9c0a; background-color:#273158;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 style="color: #cf9c0a;">Office</h5>
                            <p class="mb-0">C-1, Bank of Baroda, Sector-M, <br />Mama Chauraha, Kursi Road, Lucknow<br /> Pin Code - 226022</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; background-color:#273158;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 style="color: #cf9c0a;">Mobile</h5>
                            <p class="mb-0"><a href="tel:9708094321" style="text-decoration:none; color:#52565b !important;">+91-970-8094-321</a></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; background-color:#273158;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 style="color: #cf9c0a;">Email</h5>
                            <p class="mb-0"><a href="mailto: info@finowings.com" style="text-decoration:none; color:#52565b !important;">info@finowings.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img src="img/support.jpg" alt="Finowings-Academy-Contact" class="img-fluid mx-auto d-block" />
                </div>
                <div class="col-lg-4 col-md-12">
                 
				 
				 <form id="myform" method="post">
                        <div class="row g-3">
					
						
						<div class="col-md-6">
                                <div class="form-floating">
                                      <select class="form-control" id="enquiry_type">
	<option value="0"></option>
      <option>Technical Analysis Classes</option>
      <option>Mentor Support</option>
	  <option>Portfolio Review</option>
	  <option>Retirement Planning</option>
	  <option>Mutual Fund</option>
	  <option>Others</option>
    </select>
                                    <label for="subject">Select Your Query</label>
                                </div>
                            </div>
							
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="city" class="form-control" id="city" name="city" placeholder="Your City">
                                    <label for="city">Your City</label>
                                </div>
                            </div>
							
							<div class="col-md-6">
                                <div class="form-floating">
                                    <input type="contact" class="form-control" id="phone" name="phone" placeholder="Your Contact">
                                    <label for="contact">Your Contact</label>
                                </div>
                            </div>
						    
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                 <input type="button" id="submitFormData" onclick="SubmitFormData();" value="Send Message" class="btn btn-primary" /> 
                            </div>
							
							<div class="col-12">  
							  
							  <div id="error_message">
     
                              </div>
								
							<div id="results" align="center" style="color: #406ab2; font-size:16px; font-weight: 500;">
									<!-- All data will display here  -->
							</div>		
	
								
							</div>	
					
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
	



    <!-- Footer Start -->
    <?php //include("footer.php"); ?> 
	
    <!-- Footer End -->
	
	<div class="container-fluid bg-dark text-light footer pt-2 mt-2">
  <div class="container pt-4">
    <div class="row g-5">
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">About</h4>
        <a class="btn btn-link" href="https://www.finowings.com/about-finowings/">About Us</a>
        <!--<a class="btn btn-link" href="">Our Services</a>-->
        <a class="btn btn-link" href="https://www.finowings.com/join-us.php">Join Us</a>
        <a class="btn btn-link" href="https://www.finowings.com/contact-us.php">Contact Us</a>

      </div>

      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Legal</h4>
        <a class="btn btn-link" href="https://www.finowings.com/terms.php">Terms & Conditions</a>
        <a class="btn btn-link" href="https://www.finowings.com/privacy-policy.php">Privacy Policy</a>
        <a class="btn btn-link" href="https://www.finowings.com/refund-policy.php">Refund Policy</a>
        <!--<a class="btn btn-link" href="">Report a Violation</a>-->


      </div>


      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Useful Links</h4>
        <a class="btn btn-link" href="https://www.finowings.com/best-stock-market-training-lucknow/">Best Stock Market Institute in Lucknow</a>
        <a class="btn btn-link" href="https://www.finowings.com/stock-market-courses/">Best Technical Analysis Course</a>
        <a class="btn btn-link" href="https://www.finowings.com/technical-analysis/chart-pattern-analysis/understanding-top-10-chart-patterns/">Chart Pattern Technical Analysis</a>
        <a class="btn btn-link" href="https://www.finowings.com/financial-calculators/">Financial Calculators</a>
        <a class="btn btn-link" href="https://www.finowings.com/financial-freedom-conclave/">Events</a>
        <a class="btn btn-link" href="https://www.finowings.com/stock-market-holidays/">Stock Market Holidays</a>
      </div>



      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Contact</h4>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><strong>Head Office : </strong>C-1, Bank of Baroda, Sector-M, Mama Chauraha, Kursi Road, Lucknow</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91-9708094321</p>
        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@finowings.com</p>
        <div class="d-flex pt-2">
          <a class="btn btn-outline-light btn-social" href="https://twitter.com/finowings?t=6z2cPaYoEP8y8N-ISPD6Zg&s=08" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/finowings/" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/finowings/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/finowings/mycompany/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>


    </div>

    <div style="border-top: 1px solid rgb(255 255 255 / 20%); margin-top: 20px;">
      <div class="row">
        <h3 style="color: white; padding: 15px 0px 10px 0px;text-align: center;letter-spacing: 2px;">Training In Other City</h3>
        <div class="row" style="/* display: flex; */align-items: center;justify-content: center;/* flex-direction: column; */">
    <div class="col-md-2 col-sm-4 col-3">
          <p style="letter-spacing: 2px;text-align: center;"><a class="text-light" href="https://www.finowings.com/best-stock-market-training-lucknow/" target="_blank">Lucknow</a> </p>
    </div> 
     <div class="col-md-2 col-sm-4 col-3">
        <p style="letter-spacing: 2px;text-align: center;"><a class="text-light" href="https://www.finowings.com/best-stock-market-course-delhi/" target="_blank">Delhi</a> </p>
     </div> 
         <div class="col-md-2 col-sm-4 col-3">
         <p style="letter-spacing: 2px;text-align: center;"><a class="text-light" href="https://www.finowings.com/best-stock-market-course-ahmedabad/" target="_blank">Ahmedabad</a> </p>
         </div>
   <div class="col-md-2 col-sm-4 col-6">
             <p style="letter-spacing: 2px;text-align: center;"><a class="text-light" href="https://www.finowings.com/best-stock-market-course-mumbai/" target="_blank">Mumbai</a> </p>
   </div>  
     <div class="col-md-2 col-sm-4 col-6">
       <p style="letter-spacing: 2px;text-align: center;"><a class="text-light" href="https://www.finowings.com/best-stock-market-course-pune/" target="_blank">Pune</a> </p>
     </div>   
     </div>
      </div>
    </div>
    <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center  mb-3 mb-md-0">

        <span>Download Our App & Explore Extra Benefits<br /><br />

          <a href="https://play.google.com/store/apps/details?id=com.miniaturesoftwares.mukulagrawal&hl=en_IN" target="_blank">
           <img src="https://www.finowings.com/img/google-play-1.png" style="width:150px;" alt="mukul-agrawal-android-app">
          </a>
		   <a href="https://apps.apple.com/in/app/mukul-agrawal/id6745200830" target="_blank">
            <img src="https://www.finowings.com/img/ios-app-icon-1.png" style="width:150px;" alt="mukul-agrawal-ios-app">
          </a>
        </span>
          
        </div>
        <div class="col-md-6 text-center  mb-3 mb-md-0">
          <!-- © <a class="" href="https://www.finowings.com">Finowings.com </a> ,  All Right Reserved. -->
          Copyright © 2022 – 2025 <a class="" href="https://www.finowings.com">Finowings Training Academy Pvt. Ltd</a> , All right reserved.
          
        </div>

      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="border-bottom" href="https://www.finowings.com">Finowings.com</a>, All Right Reserved.

          
        </div>

      </div>
    </div>
  </div>
</div>




<a href="https://wa.me/+919708094321" class="whatsapp_float" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>

<a href="https://t.me/themukulagrawal" class="telegram_float" target="_blank"> <i class="fab fa-telegram telegram-icon"></i></a>

<!--<div class="diwali-diya" style="margin-bottom:100px;">
<div style="position:fixed; bottom:70px; left:10%;"><img src="https://www.finowings.com/img/diwali-diya.png" /></div><div style="position:fixed; bottom:70px; left:50%; z-index:1;"><img src="https://www.finowings.com/img/diwali-diya.png" /></div><div style="position:fixed; bottom:70px; right:10%;"><img src="https://www.finowings.com/img/diwali-diya.png" /></div>
</div>-->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
  
    <!-- Template Javascript -->
    <script src="js/main.js" defer></script>
	

</body>

</html>

