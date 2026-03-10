<?php
include("../../DLL/config.php");
include("../../DLL/functions.php");
//$tid = $_REQUEST['t'];
$tid=8;
$chaptersF = getChaptersF($tid);
$chaptersS = getChaptersS($tid);
$chaptersT = getChaptersT($tid);
$chapters4 = getChapters4($tid);
$chapters5 = getChapters5($tid);
$topic = getTopicname($tid);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $topic; ?> | Finowings Acaedemy </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="We often hear the word finance in newspapers, magazines, news etc. This word remains a topic of discussion throughout the country during the budget session." name="description">

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
    
          <!-- My CSS -->
  <link href="../../css/new-css.css" rel="stylesheet">
  
    <!-- Page Specific CSS to hide empty card but keep grid space -->
    <style>
    .fw-card-empty {
      visibility: hidden !important;
      opacity: 0 !important;
      pointer-events: none !important;
    }
    
    @media (max-width: 768px) {
      .fw-card-empty {
        display: none !important;
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
        <?php include("../../finowings-academy/fino-top-navigation.php"); ?>
    <!-- Navbar End -->

  <!-- Header Start -->
    <!--<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">FINOWINGS ACADEMY</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                           
                            <li class="breadcrumb-item text-white active" aria-current="page">Finowings Academy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
   
	
	

    <!-- Courses Section Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Concept</h6>
                <h1 class="mb-5">Tax Planning</h1>
            </div>
	
           <section id="fw-custom-section" class="courses-section">
        <div class="container">

          <div id="fw-unique-mobile-grid" class="fw-grid">
			
			
	         <div class="fw-card wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
                <div class="fw-img-box">
                            <img class="img-fluid" loading="lazy" src="https://www.finowings.com/admin/media/courseicons/Tax%20Planning%20Objectives%20and%20Strategies.png">
                        </div>
              
                         <div class="fw-content" style="width:100%; cursor:pointer;" onclick="location.href='tax-planning-basics/';'">
                               <a href="tax-planning-basics/" target="_blank" class="fw-btn">
                   Tax planning-Basics
                  </a>
                    </div>
                    </div>
			
	         <div class="fw-card wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
                <div class="fw-img-box">
                            <img class="img-fluid" loading="lazy" src="https://www.finowings.com/admin/media/courseicons/Tax%20Planning%20Objectives%20and%20Strategies.png">
                        </div>
              
                         <div class="fw-content" style="width:100%; cursor:pointer;" onclick="location.href='company-tax-planning/';'">
                               <a href="company-tax-planning/" target="_blank" class="fw-btn">
                   Tax planning for Company/Business
                  </a>
                    </div>
                    </div>
                    <div class="fw-card fw-card-empty wow fadeInUp">
                <div>
                </div>

                <div class="fw-content">
                </div>
              </div>
				
				<!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="https://www.finowings.com/admin/media/courseicons/Tax%20Planning%20Objectives%20and%20Strategies.png">
                            <div class="w-100 d-flex justify-content-left position-absolute bottom-0 start-0 mb-4">
                                <!--<a href="chapters.php?t=<?php //echo $tid; ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="chapter.php?i=<?php //echo $id; ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Read More</a>-->
                            <!-- </div>
                        </div>
                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;" onclick="location.href='individual-tax-planning/<?php echo $blog_url; ?>';">
                            <!--<a href="chapter.php?i=<?php //echo $id; ?>" style="font-size:16px; color:#FFFFFF; text-decoration:none;"><?php //echo $name; ?></a>-->
							<!-- <a href="individual-tax-planning/<?php echo $blog_url; ?>" style="font-size:16px; color:#FFFFFF; text-decoration:none;">Tax Planning for Individuals</a>
                        </div>
                        
                    </div>
                </div> -->
			
				
            </div>
        </div>
    </div>
    </div>
</section>

    </div>
    </div>
 
	<!-- Courses Section End -->


        

    <!-- Footer Start -->
    <?php include("footer.php"); ?> 
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

<!-- Latest Youtube Video Embed Javascript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
function loadVideo(iframe) {
  $.getJSON(reqURL + iframe.getAttribute('cid'),
    function(data) {
      var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
      console.log(videoNumber);
      var link = data.items[videoNumber].link;
      id = link.substr(link.indexOf("=") + 1);
      iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0&autoplay=0");
    }
  );
}
var iframes = document.getElementsByClassName('latestVideoEmbed');
for (var i = 0, len = iframes.length; i < len; i++) {
  loadVideo(iframes[i]);
}
</script>
<!-- Latest Youtube Video Embed Javascript End -->

<!--Testimonial-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script>
$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items:3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[980,2],
        itemsMobile:[600,1],
        pagination:false,
        navigationText:false,
        autoPlay:true
    });
});
</script>
